/*
!(i) 
Код попадает в итоговый файл, только когда вызвана функция, например FLSFunctions.spollers();
Или когда импортирован весь файл, например import "files/script.js";
Неиспользуемый (не вызванный) код в итоговый файл не попадает.

Если мы хотим добавить модуль следует его расскоментировать
*/
import {
  isWebp,
  headerFixed,
  togglePopupWindows,
  addTouchClass,
  addLoadedClass,
  menuInit,
} from './modules'


/* Раскомментировать для использования */
// import { MousePRLX } from './libs/parallaxMouse'

/* Раскомментировать для использования */
// import AOS from 'aos'

/* Раскомментировать для использования */
import Swiper, { Pagination } from 'swiper'

// Включить/выключить FLS (Full Logging System) (в работе)
window['FLS'] = location.hostname === 'localhost'

/* Проверка поддержки webp, добавление класса webp или no-webp для HTML
! (i) необходимо для корректного отображения webp из css 
*/
isWebp()
/* Добавление класса touch для HTML если браузер мобильный */
/* Раскомментировать для использования */
// addTouchClass();
/* Добавление loaded для HTML после полной загрузки страницы */
/* Раскомментировать для использования */
// addLoadedClass();
/* Модуль для работы с меню (Бургер) */
/* Раскомментировать для использования */
menuInit()

/* Библиотека для анимаций ===============================================================================
 *  документация: https://michalsnik.github.io/aos
 */
// AOS.init();
// =======================================================================================================

// Паралакс мышей ========================================================================================
// const mousePrlx = new MousePRLX({})
// =======================================================================================================

// Фиксированный header ==================================================================================
// headerFixed()
// =======================================================================================================

/* Открытие/закрытие модальных окон ======================================================================
* Чтобы модальное окно открывалось и закрывалось
* На окно повешай атрибут data-popup="<название окна>"
* И на кнопку, которая вызывает окно так же повешай атрибут data-type="<название окна>"

* На обертку(враппер) окна добавь класс _overlay-bg
* На кнопку для закрытия окна добавь класс button-close
*/
/* Раскомментировать для использования */
togglePopupWindows()
// =======================================================================================================

/*Динамический адаптив ===================================================================================
* Что бы перебросить блок в другой блок, повешай на него атрибут:
* data-da="class блока куда нужно перебросить, брекпоинт(ширина экрана), позиция в блоке(цифра либо first,last)"
*/
/*Расскоментировать для использования*/
import { useDynamicAdapt } from './modules/dynamicAdapt.js'
import { burgerButton } from './helpers/elementsNodeList'
useDynamicAdapt()
// =======================================================================================================




const statisticsBox = document.querySelectorAll('.statistics__box');
if (statisticsBox) {
  function animateValue(id, start, end, duration) {
    if (start === end) return;
    const range = end - start;
    let current = start;
    const increment = end > start ? 1 : -1;
    const stepTime = Math.abs(Math.floor(duration / range));
    const obj = document.getElementById(id);
    const timer = setInterval(function () {
      current += increment;
      if (!obj) {
        clearInterval(timer);
        return;
      } else {
        obj.innerHTML = current;
      }
      if (current === end) {
        clearInterval(timer);
      }
    }, stepTime);
  }

  const forward = document.getElementById('forward')

  // функция определяет нахождение элемента в области видимости
  // если элемент видно - возвращает true
  // если элемент невидно - возвращает false
  function isOnVisibleSpace(element) {
    if (element) {
      let bodyHeight = window.innerHeight;
      let elemRect = element.getBoundingClientRect();
      let offset = elemRect.top;// - bodyRect.top;
      if (offset < 0) return false;
      if (offset > bodyHeight) return false;
      return true;
    }
  }

  // глобальный объект с элементами, для которых отслеживаем их положение в зоне видимости
  let listenedElements = [];
  // обработчик события прокрутки экрана. Проверяет все элементы добавленные в listenedElements
  // на предмет попадания(выпадения) в зону видимости


  function onVisibleSpaceListener(elementId, cbIn, cbOut) {
    // получаем ссылку на объект элемента
    let el = document.getElementById(elementId);
    // добавляем элемент и обработчики событий
    // в массив отслеживаемых элементов
    listenedElements.push({
      el: el,
      inVisibleSpace: cbIn,
      outVisibleSpace: cbOut
    });
  }

  onVisibleSpaceListener("value1",
    el => {
      // функция вызываемая при попадании элемента в зону видимости
      // тут вставляем код запуска анимации
      forward.beginElement()
      animateValue("value1", 1, 100, 2000)
      animateValue("value2", 1, 10, 2000)
      animateValue("value3", 1, 14, 2000)
      animateValue("value4", 1, 5, 2000)
    });
  function listenedElementsFun() {
    listenedElements.forEach(item => {
      if (!item.el) return;
      // проверяем находится ли элемент в зоне видимости
      let result = isOnVisibleSpace(item.el);

      // если элемент находился в зоне видимости и вышел из нее
      // вызываем обработчик выпадения из зоны видимости
      if (item.el.isOnVisibleSpace && !result) {
        return;
      }
      // если элемент находился вне зоны видимости и вошел в нее
      // вызываем обработчик попадания в зону видимости
      if (!item.el.isOnVisibleSpace && result) {
        item.el.isOnVisibleSpace = true;
        item.inVisibleSpace(item.el);
        return;
      }
    });
  }
  listenedElementsFun();
  window.onscroll = function () {
    listenedElementsFun();
  }
}


const tabsItems = document.querySelectorAll('.about__tabs-item'),
  tabsContent = document.querySelectorAll('.about__box');
if (tabsItems) {
  // Добавляем обработчик события "click" для каждого элемента в tabsItems
  tabsItems.forEach((item, index) => {
    if (tabsItems[0].classList.contains('active')) {
    } else {
      tabsItems[0].classList.add('active');
    }
    if (tabsContent[0].classList.contains('active')) {
    } else {
      tabsContent[0].classList.add('active');
    }
    item.addEventListener('click', () => {
      // Добавляем класс "active" к элементу в tabsContent с тем же индексом
      tabsContent.forEach((content, contentIndex) => {
        if (contentIndex === index) {
          content.classList.add('active');
        } else {
          content.classList.remove('active');
        }
      });

      // Добавляем класс "active" к нажатому элементу в tabsItems
      tabsItems.forEach((tab) => {
        tab.classList.remove('active');
      });
      item.classList.add('active');
    });
  });
}


const portfolioSlider = document.querySelector('.portfolio__swiper');

if (portfolioSlider) {
  var swiper = Swiper;
  var init = false;
  function swiperCard() {
    if (window.innerWidth <= 768) {
      if (!init) {
        init = true;
        swiper = new Swiper(portfolioSlider, {
          modules: [Pagination],
          pagination: {
            el: ".swiper-pagination",
            dynamicBullets: true,
            clickable: true
          },
          loop: true
        });
      }
    } else if (init) {
      swiper.destroy();
      init = false;
    }
  }
  swiperCard();
  window.addEventListener("resize", swiperCard);
}



// получаем список всех блоков сервисов
const serviceBoxes = document.querySelectorAll('.services__box');
// получаем кнопку "Показать еще"
const showMoreButton = document.querySelector('.services__more');
if (serviceBoxes && showMoreButton) {
  // задаем количество блоков, которые будем показывать по умолчанию
  const defaultShowCount = 3;


  // скрываем все блоки, начиная с четвертого
  for (let i = defaultShowCount; i < serviceBoxes.length; i++) {
    serviceBoxes[i].classList.add('hidden');
  }

  // добавляем обработчик клика на кнопку "Показать еще"
  showMoreButton.addEventListener('click', function () {
    // показываем все скрытые блоки
    for (let i = defaultShowCount; i < serviceBoxes.length; i++) {
      serviceBoxes[i].classList.remove('hidden');
    }
    // скрываем кнопку "Показать еще"
    showMoreButton.classList.add('hidden');
  });
}


//передача заголовков в форму

const serviceBoxs = document.querySelectorAll('.services__box');
const modalHiddenTitle = document.querySelector('.form-title .wpcf7dtx-dynamictext.wpcf7-dynamichidden');
if (serviceBoxs) {
  serviceBoxs.forEach(serviceBox => {
    const serviceBoxTitle = serviceBox.querySelector('.services__text-type').innerHTML;

    const serviceBoxBtn = serviceBox.querySelector('.services__btn');
    serviceBoxBtn.addEventListener('click', () => {
      modalHiddenTitle.value = "";
      modalHiddenTitle.value = serviceBoxTitle;
    });
  });

}


// переключение фильтра проектов и кнопок фильтра
const exampleButton = document.querySelectorAll('.example__button')
const exampleButtonAll = document.querySelector('.example__button.all')

const examplItem = document.querySelectorAll('.item-example')

if (exampleButton.length > 0) {
  filterItemWxample(exampleButtonAll);
  exampleButton.forEach(button => {
    button.addEventListener('click', () => {
      if (button.classList.contains('active') && !(button.classList.contains('all'))) {
        button.classList.remove('_active');
      } else {
        exampleButton.forEach(button => {
          button.classList.remove('_active');
        });
        button.classList.add('_active');
      }
      filterItemWxample(button);
    });

  });
};

function filterItemWxample(button) {
  if (button.classList.contains('landing')) {
    examplItem.forEach(item => {
      if (item.classList.contains('landing')) {
        item.classList.add('_active')
      } else {
        item.classList.remove('_active')
      }
    });
  } else if (button.classList.contains('shop')) {
    examplItem.forEach(item => {
      if (item.classList.contains('shop')) {
        item.classList.add('_active')
      } else {
        item.classList.remove('_active')
      }
    });
  } else if (button.classList.contains('kwis')) {
    examplItem.forEach(item => {
      if (item.classList.contains('kwis')) {
        item.classList.add('_active')
      } else {
        item.classList.remove('_active')
      }
    });
  } else if (button.classList.contains('corporate')) {
    examplItem.forEach(item => {
      if (item.classList.contains('corporate')) {
        item.classList.add('_active')
      } else {
        item.classList.remove('_active')
      }
    });
  } else if (button.classList.contains('business')) {
    examplItem.forEach(item => {
      if (item.classList.contains('business')) {
        item.classList.add('_active')
      } else {
        item.classList.remove('_active')
      }
    });
  } else {
    examplItem.forEach(item => {
      item.classList.add('_active')
    });
  }
}



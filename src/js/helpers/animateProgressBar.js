function animateProgressBar() {
  function animateValue(id, start, end, duration) {
    if (start === end) return;
    const range = end - start;
    let current = start;
    const increment = end > start ? 1 : -1;
    const stepTime = Math.abs(Math.floor(duration / range));
    const obj = document.getElementById(id);
    const timer = setInterval(function () {
      current += increment;
      obj.innerHTML = current;
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
  window.onscroll = function () {
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
      animateValue("value1", 1, 200, 2000)
      animateValue("value2", 1, 20, 2000)
      animateValue("value3", 1, 14, 2000)
      animateValue("value4", 1, 8, 2000)
    });
}

export default animateProgressBar
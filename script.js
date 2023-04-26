document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('form')
    form.addEventListener('submit', formSend)
    //функция обработки формы
    async function formSend(e) {
        //функция запрещающая отправки формы
        e.preventDefault()

        //переменная  функция валидации и ошибки формы 
        let error = formValidate(form)

        // вытягивание всех полей инпута
        let formData = new FormData(form)
        // добавляем изображение в formData
        formData.append('image', formImage.files[0])


        //проверка error 
        if (error === 0) {
            //добавление к форме класса загрузки
            form.classList.add('_sending')
            //отправка полученных данных с формы в файл php
            let respomse = await fetch('sendmail.php', {
                method: 'POST',
                body: formData
            })
            if (respomse.ok) {
                // получение результата
                let result = await respomse.json()
                // вывод пользователю результата
                alert(result.message)
                // очищение формы
                formPriew.innerHTML = ''
                form.reset()
                form.classList.remove('__sending')
            } else {
                alert("Ошибка")
                form.classList.remove('__sending')
            }
        } else {
            //если не заполненно можно что то вывечти 
            // допустим попап "введи обязательные поля"
            alert ('введи обязательные поля')
        }
       
    }
    //создание функции
    function formValidate(form) {
        let error = 0;
        // технический класс который нужно добавиь на те инпуты которые нужно проверять
        let formReq = document.querySelectorAll('._req')
        for (let index = 0; index < formReq.length; index++) {
            const input = formReq[index];
            //вначале убираем класс error с инпута
            formRemoveError(input)

            //проверка инпуста с email, нужно добавить класс к инпуту

            if (input.classList.contains('_email')) {
                //проверка или email соответствует
                if (emailTest(input)) {
                    //если проверка не прохожит до добавляетм класс ошибки
                    formAddError(input)
                    error++
                }
                    //проверяем или является чек боксом
                                            //проверка что это чекбок       проверка что этот чекбокс не влючен
                } else if(input.getAttribute("type") === "checkbox" && input.checked === false) {
                    //добавляем к нему класс ошибки 
                    formAddError(input)
                    error++
                } else if (input.value === '') {
                //проверка всех остальных инпутов заполнены они или нет
                    formAddError(input)
                    error++
                }
            }
            return error
        }
    

    //функции добавление и удаление класса ошибки
    function formAddError(input) {
        input.parentElement.classList.add('_error')
        input.classList.add('_error')
    }
    function formRemoveError(input) {
        input.parentElement.classList.remove('_error')
        input.classList.remove('_error')
    }
    //функция проверки email на соответсвие
    function emailTest(input) {
        return !/^\W+([!\-]?\w+)*@\W+([\.-]?\w+)*(\. \w{2,8})+$/.test(input. value);
    }

    // получаем инпут выбора файла в переменную
    let formImage = document.getElementById('formImage')
    //  получаем в переменную превью картинки
    let formPriew = document.getElementById('formPriew')

    //слушаем изменение в инпуте file
    formImage.addEventListener('change', () => {
        // передаем файл в функцию загрузки файла в первью
        uploadFile(formImage.files[0])
    })
    function uploadFile(file) {
        // проверка типа файла
        if (!['image/ipeg', 'image/png', 'image/gif'].includes(file.type)) {
            alert ('выберете нужный тип файла')
            formImage.value = ''
            return
            //проверка размера файла
        } 
        if (file.size > 2 * 1024 * 1024) {
            alert ('файл должен быть меньше 2 мб')
            return
        }

        var reader = new FileReader()
        reader.onload = function(e) {
            // отправляем изображение в html priew
            formPriew.innerHTML = '<img src="${e.target.result}" alt="фото">'
        }
        reader.error =  function(e) {
            alert('Ошибка')
        }
        reader.readAsDataURL(file)
    }
})


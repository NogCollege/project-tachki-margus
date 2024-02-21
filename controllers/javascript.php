<script>
  var openLogin1 = document.querySelector('.open-menu1');
  var popupLog1 = document.querySelector('.menu-footer1')
  var openLogin2 = document.querySelector('.open-menu2');
  var popupLog2 = document.querySelector('.menu-footer2')
  var openLogin3 = document.querySelector('.open-menu3');
  var popupLog3 = document.querySelector('.menu-footer3')

  try {
    openLogin1.addEventListener('click', () => {
      // evt.preventDefault();
      console.log("Открыт!");
      popupLog1.classList.toggle("modal-show");
    });
  } catch (error) {
    console.log("error"); // выведет о чем ошибка
    //Но, можно ничего не писать вообще в блоке catch
  };

  try {
    openLogin2.addEventListener('click', () => {
      // evt.preventDefault();
      console.log("Открыт!");
      popupLog2.classList.toggle("modal-show");
    });
  } catch (error) {
    console.log(error); // выведет о чем ошибка
    //Но, можно ничего не писать вообще в блоке catch
  };

  try {
    openLogin3.addEventListener('click', () => {
      // evt.preventDefault();
      console.log("Открыт!");
      popupLog3.classList.toggle("modal-show");
    });
  } catch (error) {
    console.log(error); // выведет о чем ошибка
    //Но, можно ничего не писать вообще в блоке catch
  };



  let buttons = document.querySelectorAll('.categoty-linkProduct');

  let category = new Map([
    ['Внедорожник', document.querySelectorAll('.Внедорожник')],
    ['Бизнес', document.querySelectorAll('.Бизнес')],
    ['Спорт', document.querySelectorAll('.Спорт')],
    ['Премиум', document.querySelectorAll('.Премиум')],
    ['Комфорт', document.querySelectorAll('.Комфорт')]
  ]);

  let allCards = document.querySelectorAll('.item-product');

  function DisplayCards(cat) {
    allCards.forEach((card) => {
      card.style.display = 'none'
    });
    category.get(cat).forEach((card) => {
      card.style.display = 'block'
    });
  };

  for (let button of buttons) {
    button.addEventListener("click", function () {
      if (!button.classList.contains("button-active")) {
        console.log("Нажатие на неактивную кнопку");
        buttons.forEach((button) => {
          button.classList.remove("button-active") // убираем класс у всех кнопок
          this.classList.add("button-active") // добавляем класс к нажатой кнопке
        });
        DisplayCards(this.dataset.category);
      } else {
        console.log("Нажатие на активную кнопку");
      }
    });
  };

  document.querySelector('.btn-product').addEventListener('click', function (evt) {
    evt.preventDefault();
    allCards.forEach((card) => {
      card.style.display = 'block';
    });
    buttons.forEach((button) => {
      button.classList.remove("button-active")
    });
  });





  let sliders = document.querySelectorAll('.slider-container');
  // sliders - список всех элементов с классом class="slider"
  // sliders[0] — первый элемент, sliders[1] — второй, sliders[i] — i-тый.

  for (let i = 0; i < sliders.length; i++) {
    // Перебирает все, вызывает функцию для каждого.
    init_slider(sliders[i]);
  }

  function init_slider(slider) {
    // Значение slider: Очередной sliders[i], переданный при вызове функции.

    let slide = slider.querySelectorAll('.slide');
    // Вместо document.query... Получается список всех class="slide"
    // которые находятся где-то внутри текущего элемента slider.

    let prev = slider.querySelector('.prev-button');
    // Кнопка next внутри этого slider.

    let next = slider.querySelector('.next-button');
    // Кнопка next внутри этого slider.

    let i = 0;
    // Номер текущего "открытого" слайда.

    prev.addEventListener('click', function () {
      slide[i].classList.remove('block');
      // slide[i] - открытый слайд. Скрываем.

      i = (i - 1 + slide.length) % slide.length; // (*1)

      slide[i].classList.add('block');
      // slide[i] - следующий слайд. Показываем.
    });

    next.addEventListener('click', function () {
      slide[i].classList.remove('block');
      // slide[i] - открытый слайд. Скрываем.

      i = (i + 1) % slide.length; // (*1)

      slide[i].classList.add('block');
      // slide[i] - следующий слайд. Показываем.
    });
  }
</script>
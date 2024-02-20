<script>
var openLogin1 = document.querySelector('.open-menu1');
var popupLog1 = document.querySelector('.menu-footer1')
var openLogin2 = document.querySelector('.open-menu2');
var popupLog2 = document.querySelector('.menu-footer2')
var openLogin3 = document.querySelector('.open-menu3');
var popupLog3 = document.querySelector('.menu-footer3')
// var popupCloseLog = document.querySelector('.modal-close')

try {
    openLogin1.addEventListener('click', () => {
      // evt.preventDefault();
      console.log("Открыт!");
      popupLog1.classList.toggle("modal-show");
    });
  } catch (error) {
    console.log(error); // выведет о чем ошибка
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
</script>
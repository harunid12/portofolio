// $(function () {
//     $(document).scroll(function (){
//         var $nav = $(".navbar");
//         if($(this).scrollTop() > $nav.height()) {
//             $nav.addClass("scrolled");
//             $nav.removeClass("navbar-dark");
//             $nav.addClass("navbar-light");
//         }else{
//            $nav.removeClass("scrolled");
//            $nav.addClass("navbar-dark");
//            $nav.removeClass("navbar-light");
//         }
//     })
// });


// const text = ["Web Developer", "Deep Learning Enthusiast"];
// let counter = 0;
// let changeText = document.querySelector('.change-text');

// let interval = setInterval(change, 2000);

// function change() {
//     changeText.innerHTML = text[counter];
//     counter++;

//     if (counter >= text.length) {
//         counter = 0;
//     }
// }
const text = document.querySelector(".change-text");
const words = ["Programmer", "Web Developer"];
let index = 0;

function showText() {
  let word = words[index];
  let letters = word.split("");
  let i = 0;

  let intervalId = setInterval(() => {
    text.textContent += letters[i];
    i++;

    if (i === letters.length) {
      clearInterval(intervalId);
      setTimeout(() => {
        hideText(letters);
      }, 1000);
    }
  }, 100);
}

function hideText(letters) {
  let i = letters.length - 1;

  let intervalId = setInterval(() => {
    text.textContent = text.textContent.slice(0, -1);
    i--;

    if (i === -1) {
      clearInterval(intervalId);
      index = (index + 1) % words.length;
      setTimeout(() => {
        showText();
      }, 1000);
    }
  }, 100);
}

showText();

var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
  var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
    return new bootstrap.Popover(popoverTriggerEl)
  })


const menuItems = document.querySelectorAll('.daftar-menu a');
for (let i = 0; i <menuItems.length; i++){
  menuItems[i].addEventListener('click', setActiveMenu);
}

function setActiveMenu(event){
  const clickedMenuItem = event.target;
  const menuItems = document.querySelectorAll('.daftar-menu a');
  for (var i = 0; i < menuItems.length; i++) {
    if (menuItems[i] === clickedMenuItem) {
        menuItems[i].classList.add("active");
    } else {
        menuItems[i].classList.remove("active");
    }
  }
}

// event pada saat di klik

$('.page-scroll').on('click', function(e){

	//ambil isi href
	var tujuan = $(this).attr('href');
	//tangkap elemen yang bersangkutan

	var elemenTujuan = $(tujuan);

	//pindahkan scrol

	$('html,body').animate({
		scrollTop: elemenTujuan.offset().top - 90
	});

	e.preventDefault();

});

$('.banner').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    dots: true,
});

$('.slideDepo').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  dots: true,
});

$('.galeria').slick({
  slidesToShow: 5,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,

responsive: [
{
  breakpoint: 1024,
  settings: {
  slidesToShow: 2,
  slidesToScroll: 2,
  infinite: true,
  }
},
{
  breakpoint: 600,
  settings: {
    slidesToShow: 2,
    slidesToScroll: 2
}
},
{
  breakpoint: 480,
  settings: {
  slidesToShow: 1,
  slidesToScroll: 1
}
}
]
});


// MENU MOBILE
document.querySelector(".abrir-menu").onclick = function () {
  document.documentElement.classList.add("menu-ativo");
}

document.querySelector(".fechar-menu").onclick = function () {
  document.documentElement.classList.remove("menu-ativo")
}
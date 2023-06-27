// aqui é a parte de colocar carrosel em partes específicas do site
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




// aqui é para a galeria de imagem saber quantas imagens ela deve mostrar de acordo com o breakpoint (ponto de quebra)
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


// aqui é para dar uma função ao clicar no menu mobile
document.querySelector(".abrir-menu").onclick = function () {
  document.documentElement.classList.add("menu-ativo");
}

document.querySelector(".fechar-menu").onclick = function () {
  document.documentElement.classList.remove("menu-ativo")
}

// animação AOS
AOS.init();


// menu fixo
window.onscroll = function(){
  var top = window.scrollY || document.documentElement.scrollTop;
  console.log(top);

  if(top > 800){
    console.log("Adicionar meu menu fixo");
    document.getElementById("topoFixo").classList.add("menu-fixo")
    document.getElementById("topoFixo").classList.remove("site")
  }

  else{
    console.log("Remover meu menu fixo");
    document.getElementById("topoFixo").classList.remove("menu-fixo")
    document.getElementById("topoFixo").classList.add("site")
  }
}


// formulario
function formWhats(){
  var nome = '*Nome: *' + document.getElementById("nome").value;
  var email = '*Email: *' + document.getElementById("email").value;
  var tel = '*Fone: *' + document.getElementById("tel").value;
  var mens = '*Mensagem: *' + document.getElementById("mens").value;

  var agencia = '*Agênci TIPI*';
  var assunto = 'Mensagem do site!';

  var numFone = '5511953710475'
  var quebraDeLinha = '%0A'

    if(email== ''){
      alert ("O campo de e-mail é obrigatório");
    }

    window.open('https://api.whatsapp.com/send?phone=' + numFone)

}
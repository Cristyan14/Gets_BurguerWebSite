function cliqueBotao()  {
    const temas ={
        't-dark': 't-normal',
        't-normal': 't-dark'
    }
    const temaCorrente = document.body.dataset.theme;
    //alert (temas[temaCorrente]);
    tamanho = localStorage.getItem('tamanho');
    if (tamanho == undefined){
        tamanho=100;
    }
    document.body.setAttribute('data-theme', temas[temaCorrente]
                        || 't-normal');
    localStorage.setItem('theme', temas[temaCorrente]);

            
}

function aumentaFonte(){
    var aumenta = 10;
    tamanho = parseInt(tamanho) + aumenta;
    var corpo = document.querySelector('body');
    corpo.style.fontSize = tamanho +'%';

    var corpo1 =document.querySelectorAll('nav');
    corpo1.style.fontSize = tamanho + '%';

    var corpo2 = document.querySelector('h2');
    corpo2.style.fontSize = tamanho + '%';

    var corpo3 =document.querySelectorAll('p');
    corpo3.style.fontSize = tamanho + '%';

    var corpo4 =document.querySelectorAll('span');
    corpo4.style.fontSize = tamanho + '%';

    var corpo5 =document.querySelectorAll('h2');
    corpo5.style.fontSize = tamanho + '%';

    var corpo6 =document.querySelector('h3');
    corpo6.style.fontSize = tamanho + '%';

    localStorage.setItem('Tamanho', tamanho);
}

function diminuiFonte(){
     var diminui = 10;
    tamanho = parseInt(tamanho) - diminui;
    var corpo = document.querySelector('body');
    corpo.style.fontSize = tamanho + '%';
    var corpo = document.querySelector('body');
    corpo.style.fontSize = tamanho +'%';
    var corpo1 =document.querySelectorAll('nav');
    corpo1.style.fontSize = tamanho + '%';
    var corpo2 =document.querySelectorAll('h1');
    corpo2.style.fontSize = tamanho + '%';
    var corpo3 =document.querySelectorAll('p');
    corpo3.style.fontSize = tamanho + '%';
    var corpo4 =document.querySelectorAll('span');
    corpo4.style.fontSize = tamanho + '%';
    var corpo5 =document.querySelectorAll('h2');
    corpo5.style.fontSize = tamanho + '%';
    var corpo6 =document.getElementById('h3');
    corpo6.style.fontSize = tamanho + '%';
    localStorage.setItem('tamanho', tamanho);
    // alert (tamanho);
}



function inicializacao (){    
    const botao = document.getElementById ("btn");
    const botaoAumenta = document.getElementById("btnFonteMais")
    const botaoDiminui = document.getElementById("btnFonteMenos")
    

    tema = localStorage.getItem('theme')
    if(tema == undefined){
        tema = 't-normal';
    }
    tamanho = localStorage.getItem('Tamanho')
    if(tamanho == undefined){
        tamanho = 100;
}

document.body.setAttribute('data-theme', tema)
    document.querySelector('body').style.fontSize = tamanho + '%';
    if (botao)  {
        botao.addEventListener('click', cliqueBotao);
    }
    if (botaoAumenta){
        botaoAumenta.addEventListener('click' , aumentaFonte);
    }
    if (botaoDiminui){
        botaoDiminui.addEventListener('click' , diminuiFonte);
    }
};



function salvar(){
    var nome = document.getElementById('nome_formulario').value
    var telefone = document.getElementById('telefone_formulario').value
    var email = document.getElementById('email_formulario').value
    localStorage.setItem("nome_salvo", nome)
    localStorage.setItem("telefone_salvo", telefone)
    localStorage.setItem("email_salvo", email)
 
}

window.onload = function (){
    inicializacao();
};

function enviado(){
    window.alert("OK")
}

var telefone = document.getElementById("telefone_formulario");
/*
var invalidChars = [
  "-",
  "+",
  "e",
];

telefone.addEventListener("keydown", function(e) {
  if (invalidChars.includes(e.key)) {
    e.preventDefault();
  }
});*/
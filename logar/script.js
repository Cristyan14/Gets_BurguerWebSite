
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
    localStorage.setItem('Tamanho', tamanho);
}

function diminuiFonte(){
     var diminui = 10;
    tamanho = parseInt(tamanho) - diminui;
    var corpo = document.querySelector('body');
    corpo.style.fontSize = tamanho + '%';
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

function mudarPagina(){
    window.location.href = 'page.html'
}

function retornaPagina(){
    window.location.href = 'index.html'
}

function validar(){
    var nome = document.getElementById('nome').value
    var telefone = document.getElementById('telefone').value
    var email = document.getElementById('email').value
    localStorage.setItem("validar_nome", nome)
    localStorage.setItem("validar_telefone", telefone)
    localStorage.setItem("validar_email", email)
 
}

window.onload = function (){
    inicializacao();
};

function validado(){
    window.alert("OK")
}

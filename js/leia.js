function leiaMais(n){
    var mais = document.querySelector('.mais');
    var pontos = document.querySelector('.pontos');
    var btn = document.querySelector('btn');
    var txtbtn = document.querySelector('txtbtn');

    if(mais.style.display === 'block') {
        mais.style.display = 'none';
        pontos.style.display = 'block';
    } else {
        mais.style.display = 'block';
        pontos.style.display = 'none';
    }

}

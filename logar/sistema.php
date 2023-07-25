<?php

    session_start();
    include_once('config.php');
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true) ){
        header('Location: login.php');
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        
        
    
    }

    $logado = $_SESSION['email'];
    if(!empty($_GET['search']))
    {
        $data = $_GET['search'];
        $sql = "SELECT * FROM usuarios WHERE id LIKE '%$data%' or nome LIKE '%$data%' or email LIKE '%$data%' ORDER BY id DESC";
    }
    else
    {
        $sql = "SELECT * FROM usuarios ORDER BY id DESC";
    }
    $result = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logado</title>

    <link rel = "shortcut icon" type = "imagem/x-icon" href = "./img/hamburger.png"/>
    <link rel="stylesheet" href="css/logado.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar ">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Gets Burguer</a>

            </div>
            <?php
                echo "<h1 style='color:white; font-size:20px; margin-left:10px;'>Bem vindo: $logado</h1>";
        
        

    
            ?>
            <div class="d-flex">
                <a href="sair.php" class="btn btn-danger me-5">Sair</a>
            </div>
    </nav>
        <section class="signos">
            <div class="limitador">
            <div class="coupon">
            <div class="container">
                <h3>Gets Burguer</h3>
            </div>
            <img src="./img/cardapio_lanche.png" alt="Avatar" style="width:20%;">
            <div class="container" style="background-color:white">
                <h2><b>100% OFF (Qualquer lanche)</b></h2>
                <p>Nós do GETS Burguer, estamos dando cupons de desconto para nossos novos clientes! Aproveite já!</p>
            </div>
            <div class="container">
                <p>Use esse código promocional: <span class="promo">GETS100PORCENTO</span></p>
                <p style="font-size: 15px;">*Para utilizar seu cupom, mostre seu email cadastrado para a validação</p>
                <p class="expire">Expira: Dez 01, 2022</p>
            </div>
            </div>

                </div>
            </div>
        </section>

        <section class="promocoes_diarias" id="promocoes">
        <h2>OFERTAS EXCLUSIVAS</h2>
        <div class="limitador">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="./img/promocao.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="./img/exclusivo.png" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="./img/exclusividade.jfif" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
        </div>
    </section>
  
   
        
    <footer id="myFooter">
        <div class="containera">
            <div class="row">
                <div class="col-sm-3">
                   
                </div>
                <div class="col-sm-2">
                    <h5>Inicio</h5>
                    <ul>
                        <li><a href="../index.html">Home</a></li>
                        <li><a href="../cardapio.html">Cardápio</a></li>
                        <li><a href="../index.html">Promoções</a></li>
                        <li><a href="../index.html">Sobre</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>Sobre-nós</h5>
                    <ul>
                        <li><a href="#">Nossas Unidades</a></li>
                        <li><a href="https://web.whatsapp.com/send?phone=5511999798306" target="_blank">Contato</a></li>
                        <li><a href="#">Politica de Privacidade</a></li>
                    </ul>
                </div>

                <div class="col-sm-3">
                    <div class="social-networks">
                        <a href="https://web.whatsapp.com/send?phone=5511999798306" class="whatsapp" target="_blank"><img src="img/whatsapp.png" alt="" width="35px"></a>
                        <a href="https://instagram.com/gets.burguer?igshid=YmMyMTA2M2Y=" class="instagram"><img src="img/insta.png" alt="" width="35px"></a>
                        <a href="#" class="facebook"><img src="img/face_azul.png" alt="" width="35px" ></a>
                    </div>
                    <a href="https://web.whatsapp.com/send?phone=5511999798306" target="_blank">
                        <button type="button" class="btn btn-default">Contato</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>© 2022 Copyright - Tecnologias BAKI</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
        
</body>
</html>
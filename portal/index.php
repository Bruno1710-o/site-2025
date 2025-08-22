<?php
    include('verifica_login.php');
    include('conexao.php');
?>
<!DOCTYPE html>
<html>
<head>   
    <title> INDEX | Pagina 02 </title>
    <?php include 'includes/head.php'; ?>
</head>
<body>
    <header>
        <?php include 'includes/header.php'; ?>
    </header>
    <div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="../portal/midias/img/login2.jpg" height='500px' class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5>BEM VINDO AO MELHOR PROVEDOR DO BRASIL</h5>
            <button type='button' class='btn btn-primary btn-jg'> CONHEÇA NOSSOS PLANOS </button>
        </div>
        </div>
        <div class="carousel-item">
        <img src="../portal/midias/img/fut3.jpg" height='500px' class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p>
        </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
    
<div class="container">
    <footer>
        <?php include 'includes/footer.php'; ?>
    </foter>    
</div>
</body>
</html>
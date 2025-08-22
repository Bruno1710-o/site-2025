<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title> LOGIN | Pagina 01 </title>
    <?php include 'login/includes/head.php'; ?>
</head>
<body>
	<header>
        <?php include 'login/includes/header.php'; ?>
    </header>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form" method="POST" action="autentica.php">
                    <span class="login100-form-title p-b-26">
                        Bem Vindo
                    </span>
                    <span class="login100-form-title p-b-48">
                        <i class="zmdi zmdi-font"></i>
                    </span>

                    <div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
                        <input class="input100" type="email" name="email">
                        <span class="focus-input100" data-placeholder="Email"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <span class="btn-show-pass">
                            <i class="zmdi zmdi-eye"></i>
                        </span>
                        <input class="input100" type="password" name="senha">
                        <span class="focus-input100" data-placeholder="Senha"></span>
                    </div>

                    <?php 
                        if(isset($_SESSION['nao_autenticado'])): 
                    ?>
                      <div class="input100 validate-input m-b-18">
                       <div class="alert alert-danger" role="alert">
                        <center> Usuario ou senha invalidos </center>
                       </div>
                      </div>
                    <?php
                      endif;
                      unset($_SESSION['nao_autenticado']);
                    ?>
                    
                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn">
                                Login
                            </button>
                        </div>
                    </div>

                    <div class="text-center p-t-115">
                        <span class="txt1">
                            Você não tem uma conta?
                        </span>

                        <a class="txt2" href="#">
                            Criar
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    

    <div id="dropDownSelect1"></div>
    


	<footer>
        <?php include 'login/includes/footer.php'; ?>
    </foter> 
</body>
</html>
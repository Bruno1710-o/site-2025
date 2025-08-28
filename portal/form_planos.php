<?php
    include('verifica_login.php');
    include('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title> INÍCIO | Meu Portal </title>
        <?php include 'includes/head.php'; ?>
    </head>
    <body>
        <header>
            <?php include 'includes/header.php'; ?>
        </header>
        <div class="container">
            <br>

            <center><h5> PREENCHA OS CAMPOS ABAIXO PARA ADICIONAR UM NOVO PLANO </h5></center>

            <hr>
            <form id="formContato" class="needs-validation"  method="POST" action="cadastrar_plano.php">
            <form>
                <div class="form-row">
                    <div class="col">
                        <label for="nomePlano"> Nome</label>
                        <input type="text" class="form-control" placeholder="Nome do plano">
                    </div>
                    <div class="col">
                        <label for="descricaoPlano"> Descrição</label>
                        <input type="text" class="form-control" placeholder="Descreva detalhes do plano">
                    </div>
                    <div class="col">
                        <label for="valorPlano"> Valor</label>
                        <input type="text" class="form-control" placeholder="R$ 0,00">
                    </div>
                </div>
                <br>
                <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary">Enviar</button>
                <button type="reset" class="btn btn-secondary">Limpar</button>
            </div>
            </form>

            <br>
        </div>
        <footer>
            <?php include 'includes/footer.php'; ?>
        </footer>
    </body>
</html>

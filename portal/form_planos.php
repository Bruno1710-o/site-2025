<?php
    include('verifica_login.php');
    include('conexao.php');
    $niveldapagina = array($mestre, $colaborador);

if(!in_array($nivel, $niveldapagina)){
    echo
        "<script>
            alert('Você não tem permissão para acessar essa área!!!')
            history.go(-1);
        </script>";
}
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

            <?php
                if (isset($_SESSION['msFormPlano'])) {
                    echo $_SESSION['msFormPlano'];
                    unset($_SESSION['msFormPlano']);
                }
            ?>
<form id="formContato" class="needs-validation" method="POST" action="cad_plano.php">
    <div class="form-row">
        <div class="col">
            <label for="nomePlano">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do plano" required>
        </div>
        <div class="col">
            <label for="descricaoPlano">Descrição</label>
            <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descreva detalhes do plano" required>
        </div>
        <div class="col">
            <label for="valorPlano">Valor</label>
            <input type="number" class="form-control" id="valor" name="valor" placeholder="R$ 0,00" step="0.01" required>
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

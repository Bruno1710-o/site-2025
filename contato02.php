<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome     = $_POST["nome"] ;
    $idade    = $_POST["idade"] ;
    $email    = $_POST["email"] ;
    $telefone = $_POST["telefone"] ;
    $mensagem = $_POST["mensagem"] ;
} else {
    header("Location: pagina03.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Confirmação</title>
    <?php include 'includes/head.php'; ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <div class="card" style="width: 25rem;">
    <div class="card-body">
        <h5><div class="alert alert-primary"> INDORMAÇÔES RECEBIDAS</h5>
            <?= "<strong> Nome: </strong>" .($nome). "<br>" ?>
            <?= "<strong> Idade: </strong>" . ($idade) . "<br>" ?>
            <?= "<strong> Email: </strong>" . ($email) . "<br>" ?>
            <?= "<strong> Telefone: </strong> " . ($telefone) . "<br>" ?>
            <?= "<strong> Mensagem: </strong> <br>".($mensagem) ?>
            <br><br>
            <a href="index.php" class="btn btn-dark">Voltar</a>
    </div>
    </div>

    <?php include 'includes/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

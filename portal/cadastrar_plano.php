<?php
    include('verifica_login.php');
    include('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title> INÍCIO | Meu Portal </title>
        <?php include 'includes/head.php'; ?>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>

<body>
    <header>
        <?php include 'includes/header.php'; ?>
    </header>
    <br>
    <div class="container">
        <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
            <div class="card mt-4">
                <div class="card-header bg-primary text-white">Informações Recebidas</div>
                <div class="card-body">
                    <p><strong> Nome:</strong> <?= htmlspecialchars($_POST["Nome"]) ?></p>
                    <p><strong> Descrição:</strong> <?= htmlspecialchars($_POST["Descricao"]) ?></p>
                    <p><strong> Valor:</strong> R$ <?= number_format($_POST["Valor"], 2, ',', '.') ?></p>
                </div>
            </div>
        <?php endif; ?>
    </div>

    <footer>
        <?php include 'includes/footer.php'; ?>
    </footer>
</body>
</html>

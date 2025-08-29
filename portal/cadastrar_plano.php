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

    <div class="container mt-4">
        <?php if ($_SERVER["REQUEST_METHOD"] === "POST"): ?>
            <?php
                $nome = $_POST["nome"] ?? '';
                $descricao = $_POST["descricao"] ?? '';
                $valor = $_POST["valor"] ?? 0;
            ?>
            <div class="card mt-4">
                <div class="card-header bg-primary text-white">Informações Recebidas</div>
                <div class="card-body">
                    <p><strong>Nome:</strong> <?= htmlspecialchars($nome) ?></p>
                    <p><strong>Descrição:</strong> <?= htmlspecialchars($descricao) ?></p>
                    <p><strong>Valor:</strong> R$ <?= number_format((float)$valor, 2, ',', '.') ?></p>
                </div>
            </div>
            <a class="btn btn-light" href="index.php" role="button" id="header1">Sair</a>
        <?php else: ?>
            <div class="alert alert-warning mt-4">Nenhum dado foi enviado.</div>
        <?php endif; ?>
    </div>

    <footer class="mt-5">
        <?php include 'includes/footer.php'; ?>
    </footer>
</body>
</html>

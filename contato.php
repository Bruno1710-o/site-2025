<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato | Página 03</title>
    <?php include 'includes/head.php'; ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <div class="container mt-5">
        <h2>Formulário de Contato</h2>
        <form id="formContato" class="needs-validation"  method="POST" action="contato02.php">
            
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome completo" required>
                <div class="invalid-feedback">
                    Por favor, insira seu nome.
                </div>
            </div>
            <div class="mb-3">
                <label for="idade" class="form-label">Idade</label>
                <input type="number" class="form-control" id="idade" name="idade" placeholder="Digite sua idade" required min="0">
                <div class="invalid-feedback">
                    Por favor, insira uma idade válida.
                </div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="seuemail@.com" required>
                <div class="invalid-feedback">
                    Por favor, insira um e-mail válido.
                </div>
            </div>
            <div class="mb-3">
                <label for="telefone" class="form-label">Telefone para Contato</label>
                <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="(00) 1234-5678" required pattern="^\(\d{2}\) \d{4}-\d{4}$">
                <div class="invalid-feedback">
                    Por favor, insira um telefone válido no formato (XX) XXXX-XXXX.
                </div>
            </div>
            <div class="mb-3">
                <label for="mensagem" class="form-label">Mensagem</label>
                <textarea class="form-control" id="mensagem" name="mensagem" rows="6" placeholder="Digite sua mensagem..." required></textarea>
                <div class="invalid-feedback">
                    Por favor, escreva uma mensagem.
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary">Enviar</button>
                <button type="reset" class="btn btn-secondary">Limpar</button>
            </div>
        </form>
    </div>
    <?php include 'includes/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
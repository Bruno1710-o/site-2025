<nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" id="header" href="../index.php">
            <img src="midias/img/log.png" alt="Logo"  height="50" class="d-inline-block align-text-top">
            VOLTAR
            </a>
            <i class='fa fa-user-circle' style='font-size:24px'>&emsp;<?php echo $noperador." ".$soperador ;
?></i>
        </div>
    </nav>

    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#"></a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" id="header" href="index.php"><i class="fa fa-home">&ensp;</i>Home</a>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="header"> Adicionar</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="planos.php"><i class="fa fa-address-card">&ensp;</i> Clientes</a></li>
                            <li><a class="dropdown-item" href="form_planos.php"><i class="fa fa-leaf">&ensp;</i>Planos</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="planos.php"><i class="fa fa-calendar">&ensp;</i>Atendimento</a></li>
                        </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="header" href="contato.php"><i class="fa fa-bar-chart">&ensp;</i>Fatura</a>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="header"> Listar</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="planos.php"><i class="fa fa-address-card">&ensp;</i> Clientes</a></li>
                            <li><a class="dropdown-item" href="planos.php"><i class="fa fa-leaf">&ensp;</i>Planos</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="planos.php"><i class="fa fa-calendar">&ensp;</i>Atendimentos</a></li>
                        </ul>
                        </li>
                    </ul>
                <a class="btn btn-light" href="log.php" role="button" id="header1">Sair</a>
            </div>
        </div>
    </nav>

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

            <?php
                $consulta ="SELECT * FROM planos
                    ORDER BY nome ASC";

                $con    = mysqli_query($conexao, $consulta) OR DIE ($conexao->erro);

                if(($con) AND ($con->num_rows != 0)) {
            ?>

            <center><h5> LISTA DE PLANOS CADASTRADOS </h5></center>
                
            <hr>

            <?php
                if (isset($_SESSION['msglistaPlano'])) {
                    echo $_SESSION['msglistaPlano'];
                    unset($_SESSION['msglistaPlano']);
                }
            ?>

                <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col"> Plano</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Excluir</th>
                    </tr>
                </thead>
                <tbody>

                <?php while($dado = mysqli_fetch_assoc($con)) { ?>
                    <tr>
                        <th scope="row"><?php echo $dado['id_plano']; ?></th>
                        <td><?php echo $dado['nome'];?></td>
                        <td><?php echo $dado['descricao'];?></td>
                        <td><?php echo $dado['valor'];?></td>
                        <td><i class='fa fa-edit' style='font-size:24px'></td>
                        <td><i class='fa fa-trash' style='font-size:24px'></td>
                    </tr>
                </tbody>
                <?php } ?>
                </table>

                <?php } else {
                    echo "<p> NENHUM PLANO CADASTRADO! </p>";
                }
                ?>


            <br>
        </div>
        <footer>
            <?php include 'includes/footer.php'; ?>
        </footer>
    </body>
</html>

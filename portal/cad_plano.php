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
} else if (!empty($_POST['nome']) OR !empty($_POST['descricao']) OR !empty($_POST['valor'])) {

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$valor = (float) $_POST['valor'];

    $sql_code = "INSERT INTO planos (nome,descricao,valor, dt_cad_plano) VALUES ('$nome', '$descricao', '$valor', NOW())";

    if ($conexao->query($sql_code) or die($conexao->error)){
        $_SESSION['msglistaPlano'] = "<center><div class='alert alert-primary' role='alert'> OK, Plano inserido com SUCESSO!!! </div></center>";
        header("Location: lista_planos.php");
    } else {
        $_SESSION['msFormPlano'] = "<center> <div class='alert alert-danger' role='alert'>ERRO, Plano  Não foi inserido com SUCESSO!!!</div></center>";
        header("Location: form_planos.php");
    }

} else {
    echo
        "<script>
          alert('VIOLAÇÂO: Tentativa inlegal de operação!!!')
          history.go(-1);
        </script>";
}
?>
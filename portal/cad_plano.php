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

} else {
    echo
        "<script>
            alert('VIOLAÇÂO: Tentativa inlegal de operação!!!')
            history.go(-1);
        </script>";
}
?>
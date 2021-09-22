<?php
require_once('conecta.php');
conn();

$senha = R::dispense( 'senhas' );
$senha->id = $_POST['id'];
$senha->site = base64_encode(addslashes($_POST['site']));
$senha->login = base64_encode(addslashes($_POST['login']));
$senha->senha = base64_encode(addslashes($_POST['senha']));

R::begin();
try{
    $id = R::store($senha);
    header("Location: index.php");
}catch (Exception $e){
    R::rollback();
    print_r($e);
}

?>
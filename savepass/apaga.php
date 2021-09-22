<?php
require_once('conecta.php');
conn();
$senha = R::load( 'senhas', $_GET['id'] );
R::trash( $senha );

header("Location: index.php");
?>
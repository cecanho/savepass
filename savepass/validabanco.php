<?php
//validador de banco e tabelas criadas
require_once("conecta.php");
conn();
//verifica se a tabela existe, caso não, a função cria a tabela senhas
function criaTabela()
{
    $sql = "CREATE TABLE IF NOT EXISTS senhas(
        id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        site VARCHAR(128),
        login VARCHAR(64),
        senha VARCHAR(32)
    );";
    
    R::exec($sql);
}

?>
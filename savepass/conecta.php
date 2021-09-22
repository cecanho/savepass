<?php

function conn(){
//import do redbean
require_once("db/rb-mysql.php");

//Conexão com o banco de dados. Necessário criar o banco savepass com collation utf8-general-ci
R::setup( 'mysql:host=localhost;dbname=savepass','root', '' );
}

?>
<?php
setcookie('nome');
$str = "cd C:/xampp/mysql/bin && mysqldump --user=root --password= --host=localhost savepass --result-file=C:/xampp/htdocs/savepass/dumps/dump".date('d-m-Y').".sql 2>&1";
system($str);
header("Location: index.php");
?>
<?php
require_once('conecta.php');
conn();
$id = $_GET['id'];
$senhas = R::find( 'senhas', ' id =' . $id );
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <title>SAVEPASS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<div class="jumbotron text-center alert-info">
 
  <h1>SAVEPASS</h1>
  <p>Não grave suas senhas em navegadores jamais!</p> 
</div>
<div class="container">
  <form name="frm" method="post" action="atualiza.php">
    <div class="row">
        <?php foreach($senhas as $s){?>
    <div class="col-sm-3">
        <div class="form-group">
            <label for="site">SITE:</label>
            <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $s['id'];?>">
            <input type="text" class="form-control" id="site" name="site" value="<?php echo base64_decode($s['site']);?>">
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            <label for="login">LOGIN:</label>
            <input type="text" class="form-control" id="login" name="login" value="<?php echo base64_decode($s['login']);?>">
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            <label for="senha">SENHA:</label>
            <input type="password" class="form-control" id="senha" name="senha" value="<?php echo base64_decode($s['senha']);?>">
        </div>
    </div>
    <input type="submit" class="btn btn-sm btn-primary" style="height: 35px;margin-top: 33px" value="ATUALIZAR">
    </div>  
  </form>
  <?php } ?>
</div>
</body>
</html>
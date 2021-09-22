<?php
require_once("validabanco.php");
criaTabela();

$senhas = R::findAll('senhas');

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
  <script type="text/javascript">
        $(document).ready(function() {
            $("#BACK").toggle(0);
            $("#NOVO").toggle(0);
            for(i=0;i<500;i++){
              $("#senha" + i).toggle(100);
            }
        });

        function showHidden(nomeDiv){
            $("#" + nomeDiv).toggle(100);
        }
        function showHiddenPass(nomeDiv){
            $("#" + nomeDiv).toggle(100);
        }
        </script>

</head>
<body>
<div class="jumbotron text-center alert-info">
 
  <h1>SAVEPASS</h1>
  <p>Não grave suas senhas em navegadores jamais!</p> 
</div>
<div class="container">
    
    <strong class="text-center"><div onclick="showHidden('BACK')">+ BACKUP E RESTAURAÇÃO </strong></div> 
    <div id="BACK">
    <div class="row">
    <div class="col-sm-4">
    <a href="http://localhost/phpmyadmin" alt="Restaurar"><input type="submit" class="btn btn-primary" value="Restaurar" style="height: 35px; margin-top: 15px"></a>
        
    </div>
    <div class="col-sm-4">
      <form name="frmdump" method="post" action="dump.php">  
        <div><input type="submit" class="btn btn-success" value="Backup" style="height: 35px; margin-top: 15px"></div>
      </form>    
    </div>
    </div>
    </div>
<hr>
  <form name="frm" method="post" action="novo.php">
    <strong class="text-center"><div onclick="showHidden('NOVO')">+ NOVO </strong> </div>
    <div id="NOVO">
    <div class="row">
    <div class="col-sm-3">
        <div class="form-group">
            <label for="site">SITE:</label>
            <input type="text" class="form-control" id="site" name="site">
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            <label for="login">LOGIN:</label>
            <input type="text" class="form-control" id="login" name="login">
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            <label for="senha">SENHA:</label>
            <input type="password" class="form-control" id="senha" name="senha">
        </div>
    </div>
    <input type="submit" class="btn btn-primary btn-sm" style="height: 30px; margin-top: 35px" value="CADASTRAR">
    </div>
    </div>  
  </form>
  <hr>
  <!-- Cabeçalho -->
  <div class="row alert-info">
 
    <div class="col-sm-3">
        <strong>SITE/SISTEMA</strong>
    </div>
    <div class="col-sm-3">
        <strong>LOGIN</strong>
    </div>
    <div class="col-sm-3">
        <strong>SENHA</strong>
    </div>
    <div class="col-sm-3 text-center">
        <strong>OPERAÇÃO</strong>
    </div>
  </div>
   

    <!-- Corpo da tabela -->
    <?php
    $i=1;
    $count=0;
    foreach($senhas as $s){
      $count++;
        if($i==0){
            $i++;
            $troca = "alert-success";
        }else{
            $i--;
            $troca = "";
        }
       ?>
    <div class="row <?php echo $troca; ?>">
    <div class="col-sm-3" style="margin-top: 7px">
    <?php echo base64_decode($s['site']); ?>
    </div>
    <div class="col-sm-3" style="margin-top: 7px">
    <?php echo base64_decode($s['login']); ?>
    </div>
    <div class="col-sm-3" style="margin-top: 7px;">
    <div id="senha<?php echo $count;?>"><code><?php echo base64_decode($s['senha']); ?></code></div>   
    </div>
    <div class="col-sm-3 text-center">
    <button type="button" class="btn btn-default btn-xm" onclick="showHiddenPass('senha<?php echo $count;?>')">
        <img src="img/show.png" style="width: 20px">
    </button>
    <a class="btn btn-default btn-xm" href="edita.php?id=<?php echo $s['id']; ?>" alt="Editar"><img src="img/edit.png" style="width: 20px"></a>
    <a class="btn btn-default btn-xm" href="apaga.php?id=<?php echo $s['id']; ?>" alt="Apagar"><img src="img/delete.png" style="width: 20px"></a>

    </div>
    </div>
    <?php
    }
    ?>
    
</div>
</body>
</html>
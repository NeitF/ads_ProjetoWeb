<?php
require_once("../conexao/conexao.php");
require("./bdAdmin.php");
require("./bdCadastro.php");
require("./bdLoja.php");
require("./bdNoticias.php");
require("./bdTorneios.php");
?>

<html lang="pt-br">
<head>
    <title>Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device=width, initial-scale = 1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <link rel="stylesheet" type="text/css" href="../mycss/estilos.css">
    <script>
        function fnDash(opcao){
            document.frmDashboard.action="./dashboard.php?acao=" + opcao;
            document.frmDashboard.submit();

            return false;
        }
    </script>
</head>
<body>
<div class="container-fluid" style="padding: 0">
<div class="col-2 fixed-top" style="background: linear-gradient(to bottom, #0099ff 0%, #6600ff 100%); height: 100%; padding: 0px;">
    <section class="dash-container flex-dash">
        <img src="./perfil/<?php echo $FotoAdmin?>" height="70px" width="70px" class="rounded-circle" style="margin-top: 20px;">
        <span class="text-light" style="font-size: 22px; margin-top: 30px; margin-left: 10px"><?php echo $NomeAdmin ?> <?php echo $SobrenomeAdmin ?><p class="text-dark" style="font-size: 14px;">ID: #<?php echo $IdAdmin ?></p></span>  
      </section>

   <form name="frmDashboard" method="post" action="" enctype="multipart/form-data">     
   <div style="margin-top: 50px; color: #fff;">
        <a href="#" class="dash-menu text-light">Dashboard</a>
        <a href="#tabelas" data-toggle="collapse" aria-expanded="false" aria-controls="tabelas" class="dash-menu text-light">Tabelas<i class="fas fa-angle-down" style="margin-left: 10px;"></i></a>
        <div class="collapse" id="tabelas">
            <a href="#" onClick="fnDash('users')" class="text-dark tabela-menu">Cadastro</a>
            <a href="#" onClick="fnDash('adm')" class="text-dark tabela-menu">Admin</a>
            <a href="#" onClick="fnDash('loja')" class="text-dark tabela-menu">Loja</a>
            <a href="#" onClick="fnDash('noticias')" class="text-dark tabela-menu">Notícias</a>
            <a href="#" onClick="fnDash('torneios')" class="text-dark tabela-menu">Torneios</a>
        </div>
     
   </div> 
   <a href="../index.php" style="position: absolute; bottom: 0; left: 0;" class="text-light btn btn-primary btn-lg btn-block">Sair</a>     
      
</div>
<div class="col" style="background: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%); height: 100%;">
    <div class="dash-content">      
    

        <?php
            if(isset($_REQUEST["acao"])){
                if($_REQUEST["acao"] == 'adm' || $_REQUEST["acao"] == 'admConsultar'){
                    require_once("admin.php");
                }else if($_REQUEST["acao"] == 'users' || $_REQUEST["acao"] == 'userConsultar'){
                    require_once("dashCadastro.php");
                }else if($_REQUEST["acao"] == 'loja' || $_REQUEST["acao"] == 'prodConsultar'){
                    require_once("dashLoja.php");
                }else if($_REQUEST["acao"] == 'noticias' || $_REQUEST["acao"] == 'notiConsultar'){
                    require_once("dashNoticias.php");
                }else if($_REQUEST["acao"] == 'torneios' || $_REQUEST["acao"] == 'torConsultar'){
                    require_once("dashTorneios.php");
                }
            }else{
                require_once("dashCadastro.php");
            }
        ?>

    </form>    
    </div>
</div>

</div>    
<script src="../js/jquery-3.4.1.js"></script>
<script src="../popper/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>    
</body>
</html>
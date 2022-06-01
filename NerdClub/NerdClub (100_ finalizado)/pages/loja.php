<?php
require_once("../conexao/conexao.php");
$consulta = "select * from tblLoja";
$con = mysqli_query($conexao, $consulta);

?>

<html lang="pt-br">
    <head>
        <title>NerdClub</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device=width, initial-scale = 1.0">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../fontawesome/css/all.css">
        <link rel="stylesheet" type="text/css" href="../mycss/estilos.css">
    </head>
<body>

<!--Navbar-->
<div class="navbar navbar-expand-lg fixed-top navbar-light mybg">
    <div class="container">
        <a class="navbar-brand text-brand my-3 ml-xl-5 ml-sm-0 mr-xl-4 mr-sm-0 marca d-lg-none d-xl-block" href="../index.php"><div class="black"><span class="red">Nerd</span>Club</div></a>

        <a class="navbar-brand text-brand my-3 ml-sm-0 mr-sm-0 marca d-none d-lg-block d-xl-none" href="#"><div class="black"><span class="red">Nerd</span>Club</div></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynav" aira-controls="mynav" aria-expanded="false" aria-label="Navegação">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse justify-content-between navbar-collapse" id="mynav">
            <ul class="navbar-nav mx-auto menu ml-lg-5 ml-sm-0">
                <li class="nav-item">
                      <a href="../index.php" class="nav-link text-light m-2 mt-3 mylink">Inicio</a>  
                </li>   
                <li class="nav-item">
                      <a href="sobre.php" class="nav-link text-light m-2 mt-3 mylink">Sobre</a>  
                </li> 
                <li class="nav-item">
                      <a href="loja.php" class="nav-link text-light m-2 mt-3 mylink">Loja</a>  
                </li> 
                <li class="nav-item">
                      <a href="noticias.php" class="nav-link text-light m-2 mt-3 mylink">Notícias</a>  
                </li> 
                <li class="nav-item">
                      <a href="torneio.php" class="nav-link text-light m-2 mt-3 mylink">Torneios</a>  
                </li>  
                <li class="nav-item">
                      <a href="contato.php" class="nav-link text-light m-2 mt-3 mylink">Contato</a>  
                </li> 
            </ul>  
        
            <div class="search-box">
                <input class="search-txt d-lg-none d-xl-block" type="text" name="" placeholder="Pesquisar">
                <input class="search-lg-txt d-none d-lg-block d-xl-none" type="text" name="" placeholder="Pesquisar">
                <a class="search-btn " href="#">
                <i class="fas fa-search"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<!--Fim da Navbar-->

<!--Itens-->
<div class="container" style="margin-top: auto; margin-bottom: auto;">
    <div class="row">

        <?php while($dados = mysqli_fetch_array($con)){ ?>
        <div class="col-lg-4 col-sm-12">
            <div class="card" style="width: 18rem; margin-top: 40%;">
                <img src=<?php echo "perfil/" .$dados["prod_foto"] ?> height="280px" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $dados["prod_nome"] ?></h5>
                    <h4 class="card-subtitle text-primary mb-2">R$<?php echo $dados["prod_preco"] ?></h4>
                    <p class="card-text text-muted">  <?php echo $dados["prod_descricao"] ?>
                    <h6 class="text-danger"><?php echo $dados["prod_qntd"] ?> em estoque</h6><br><a href="#" class="btn btn-primary">Ver mais</a>
                </div>
            </div>
        </div>
        <?php } ?>  
    </div>
</div>
<!--Fim do itens-->


<div class="page-footer mytexto">
	<div class="footer-copyright text-light text-center fixed-bottom">© 2019 Copyright:
		<a href="../index.php">NerdClub.com</a>
    </div>
</div>

 
<script src="../js/jquery-3.4.1.js"></script>
<script src="../popper/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>   
</html>
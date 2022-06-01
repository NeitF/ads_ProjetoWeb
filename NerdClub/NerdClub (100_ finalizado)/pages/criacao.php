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

<div class="jumbotron mybg text-light" style="margin-top: 60px;margin-bottom: 60px;">
		<h1 class="display-4 text-center">Crie seu próprio torneio</h1>
</div>


<div class="container">
    <div class="row">
        <div class="col" style="margin-top: 2%;">
        <div class="form-row d-flex justify-content-center">
            <div class="form-group col-4 mt-5">
                <label class="text-light">Nome do torneio:</label>
                <input type="text" name="torNome" id="torNome" class="form-control">
            </div>
            <div class="form-group col-4 mt-5">
                <label class="text-light">Prêmio:</label>
                <input type="text" name="torPremio" id="torPremio" class="form-control">
            </div>
        </div>
        <div class="form-row d-flex justify-content-center">
            <div class="form-group col-8">
                <label class="text-light">Descrição:</label>
                <textarea class="form-control" name="torDescricao" id="torDescricao" rows="5"></textarea>
            </div>
        </div>
        <div class="form-row d-flex justify-content-center">
            <div class="form-group col-3">
                <label class="text-light">Jogo:</label>
                <input type="text" name="torJogo" id="torJogo" class="form-control">
            </div>
            <div class="form-group col-2">
                <label class="text-light">Quantidade de times:</label>
                <input type="number" name="torTime" id="torTime" class="form-control">
            </div>
            <div class="form-group col-3">
                <label class="text-light">Presencial:</label>
                <select class="form-control" id="torPresencial" name="torPresencial">
                    <option>Não</option>
                    <option>Sim</option>
                </select>
            </div>
        </div>
        <div class="form-row d-flex justify-content-center">
            <div class="form-group col-4">
                <label class="text-light">Thumbnail do torneio: </label>
                <input type="file" class="form-control-file text-light" id="admFoto" name="admFoto">
            </div>
        </div>
        <center>
            <br>
        <a href="#" onClick="" class="btn btn-danger">Criar torneio</a>
        </center>
        </div>
    </div>
</div>




 
<script src="../js/jquery-3.4.1.js"></script>
<script src="../popper/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>   
</html>
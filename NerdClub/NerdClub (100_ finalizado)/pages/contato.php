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

<div class="container">
    <div class="row" style="margin-top: 25%;">
        <div class="col-lg-6 col-sm-12">
            <div class="contact-box">
                <center><h1 class="text-light"><i class="fas fa-envelope"></i> Contate-nos</h1>
                <br>
                <label class="text-light">Digite o seu nome:</label>
                <input type="text" size="40">
                <br><br>
                <label class="text-light">Digite o seu email:</label>
                <input type="text" size="40">
                <br><br>
                <label class="text-light">Digite a sua mensagem:</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                <br>
                <button class="btn btn-danger">Enviar</button>
                </center>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12">
            <div class="info-box">
                <center><h2 class="red"><i class="fas fa-envelope-open-text"></i> Nos mande um email</h2>
                    <h4 class="text-primary">nerdclub@outlook.com</h4>
                    <br><br>
                    <h2 class="red"><i class="fas fa-phone"></i> Ligue para nós</h2>
                    <h4 class="text-primary">(19) 3857-4992</h4>
                    <h4 class="text-primary">(19) 99504-6870</h4>
                    <br><br>
                    <h2 class="red"><i class="fas fa-thumbtack"></i> Redes sociais</h2>
                    <h4 class="text-primary"><i class="fab fa-facebook"></i> facebook.com/nerdclub</h4>
                    <h4 class="text-primary"><i class="fab fa-twitter"></i> twitter.com/nerdclub</h4>
                    <h4 class="text-primary"><i class="fab fa-youtube"></i> youtube.com/nerdclub</h4>
                </center>
            </div>
        </div>
    </div>
</div>




 
<script src="../js/jquery-3.4.1.js"></script>
<script src="../popper/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>   
</html>
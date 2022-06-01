<html lang="pt-br">
    <head>
        <title>NerdClub</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device=width, initial-scale = 1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="./fontawesome/css/all.css">
        <link rel="stylesheet" type="text/css" href="./mycss/estilos.css">
    </head>
<body>

<!--Navbar-->
<div class="navbar navbar-expand-lg fixed-top navbar-light mybg">
    <div class="container">
        <a class="navbar-brand text-brand my-3 ml-xl-5 ml-sm-0 mr-xl-4 mr-sm-0 marca d-lg-none d-xl-block" href="index.php"><div class="black"><span class="red">Nerd</span>Club</div></a>

        <a class="navbar-brand text-brand my-3 ml-sm-0 mr-sm-0 marca d-none d-lg-block d-xl-none" href="index.php"><div class="black"><span class="red">Nerd</span>Club</div></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynav" aira-controls="mynav" aria-expanded="false" aria-label="Navegação">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse justify-content-between navbar-collapse" id="mynav">
            <ul class="navbar-nav mx-auto menu ml-lg-5 ml-sm-0">
                <li class="nav-item">
                      <a href="index.php" class="nav-link text-light m-2 mt-3 mylink">Inicio</a>  
                </li>   
                <li class="nav-item">
                      <a href="./pages/sobre.php" class="nav-link text-light m-2 mt-3 mylink">Sobre</a>  
                </li> 
                <li class="nav-item">
                      <a href="./pages/loja.php" class="nav-link text-light m-2 mt-3 mylink">Loja</a>  
                </li> 
                <li class="nav-item">
                      <a href="./pages/noticias.php" class="nav-link text-light m-2 mt-3 mylink">Notícias</a>  
                </li>
                <li class="nav-item">
                      <a href="./pages/torneio.php" class="nav-link text-light m-2 mt-3 mylink">Torneios</a>  
                </li>  
                <li class="nav-item">
                      <a href="./pages/contato.php" class="nav-link text-light m-2 mt-3 mylink">Contato</a>  
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

<!--Carrossel-->
<div id="controlCarrossel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <ol class="carousel-indicators">
            <li data-target="#controlCarrossel" data-slide-to="0" class="active"></li>
            <li data-target="#controlCarrossel" data-slide-to="1" class="active"></li>
            <li data-target="#controlCarrossel" data-slide-to="2" class="active"></li>
        </ol>

        <div class="carousel-item active">
            <img class="w-100 height my-lg-h d-none d-xl-block mt-3 altura" src="./imgs/NerdClubHome.png">
            <img class="w-100 d-xl-none" src="./imgs/NerdClubHome.png">
            <div class="carousel-caption">
               <div class="container-fluid">
                    <p class="cap">Bem-Vindo a Comunidade</p>        
                    <p class="cap2"><span class="red">Nerd</span><span style="color: #070501">Club</span></p> 
                    <p><a href="./pages/login-index.php" class="btn btn-lg btn-outline-danger-a">Cadastro / Login</a></p>
               </div> 
                   
            </div>
        </div>

    </div>
</div>
<!--Fim do Carrossel-->

<!--Página-->
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-4 col-sm-12 mt-5 text-light">
            <center><i class="fas fa-gamepad icon-size" style="color: #D31717"></i></center>
            <p class="texto-alinhado text-danger" style=" font-weight: bold; font-size: 25px;">Mundo Nerd
            <p class="texto-alinhado" style="font-size: 15px;">Informações a respeiro do mundo nerd: games, filmes, séries, quadrinhos e muito mais!
        </div>
        <div class="col-lg-4 col-sm-12 mt-5 text-light">
            <center><i class="fas fa-users icon-size" style="color: #D31717"></i></center>
            <p class="texto-alinhado text-danger" style=" font-weight: bold; font-size: 25px;">Comunidade 
            <p class="texto-alinhado" style="font-size: 15px;">Uma grande comunidade nerd. Faça novos amigos e compartilhem os seus conhecimentos geek.
        </div>
        <div class="col-lg-4 col-sm-12 mt-5 text-light">
            <center><i class="fas fa-tv icon-size" style="color: #D31717"></i></center>
            <p class="texto-alinhado text-danger" style=" font-weight: bold; font-size: 25px;">Torneios 
            <p class="texto-alinhado" style="font-size: 15px;">Realize torneios sem sair de casa, ou se você preferir, um super evento presencial!
        </div>
    </div>
</div>
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-lg-6 order-lg-2 col-sm-12 p-0 mt-5">
            <img src="imgs/sw.jpg" class="img-fluid" style="min-height: 40rem;">
        </div>
        <div class="col-lg-6 order-lg-1 col-sm-12 mt-5 d-flex align-items-center" style="height: 40rem;">
            <p class="text-light my-auto" style="font-size: 20px; font-family: 'MontRegular'; margin-left: 60px; margin-right: 60px;">Aqui você terá acesso em primeira mão das notícias do mundo nerd. Trabalhamos duro para que você seja atualizado diariamente.
        </div> 
    </div>
    <div class="row">
        <div class="col-lg-6 order-lg-1 col-sm-12 p-0">
            <img src="imgs/rdr.jpg" class="img-fluid" style="min-height: 40rem;">
        </div>
        <div class="col-lg-6 order-lg-2 col-sm-12 d-flex align-items-center" style="height: 40rem;">
            <p class="text-light my-auto" style="font-size: 20px; font-family: 'MontRegular'; margin-left: 60px; margin-right: 60px;">Conheça pessoas novas, crie novas amizades e chame-as para conversar ou jogar.
        </div> 
    </div>
    <div class="row">
        <div class="col-lg-6 order-lg-2 col-sm-12 p-0">
            <img src="imgs/e-sport.jpg" class="img-fluid" style="min-height: 40rem;">
        </div>
        <div class="col-lg-6 order-lg-1 col-sm-12 d-flex align-items-center" style="height: 40rem;">
            <p class="text-light my-auto" style="font-size: 20px; font-family: 'MontRegular'; margin-left: 60px; margin-right: 60px;">Quer realizar um torneio mas não sabe por onde começar? Não se preocupe, temos uma equipe preparada para isso!
        </div> 
    </div>
</div>
<!--Fim da Página-->

<!--Pessoas-->
    <!-- Staff -->	
    <div class="jumbotron mybg text-light" style="margin-top: 60px;margin-bottom: 60px;">
					<h1 class="display-4 text-center">O que as pessoas estão achando?</h1>
	</div>
			

				<!-- Staff -->
				<div class="container">
					<div class="row">
						<div class="col-xl-4 col-lg-4 col-sm-12 order-1">
								<center><img src="imgs/vader.jpeg" height="200px" width="200px" class="rounded-circle">	</center>
                                <h1 class="text-center display-4 text-light">Darth Vader</h1>	
                                <h5 class="text-muted text-center">"Venha para o lado sombrio da força"</h5>
								<p class="text-light" align="justify">Graças a esse site derrotaremos os Jedi e dominaremos a galáxia!</p>							
						</div>

						<div class="col-xl-4 col-lg-4 col-sm-12 order-2 ">
							<center><img src="imgs/morgan.jpg" height="200px" width="200px" class="rounded-circle"></center>
							<h1 class="text-center display-4 text-light">Arthur Morgan</h1>
							<h5 class="text-muted text-center">"LENNY!"</h5>
							<p class="text-light" align="justify">Não sei muito de internet mas a gang ta gostando muito desse site. Dutch diz que usará ele em uma plano.</p>
						</div>

						<div class="col-xl-4 col-lg-4 col-sm-12 order-3 ">
							<center><img src="imgs/doctor.jpg" height="200px" width="200px" class="rounded-circle"></center>
							<h1 class="text-center display-4 text-light">The Doctor</h1>
							<h5 class="text-muted text-center">"I'm the Doctor!"</h5>
							<p class="text-light" align="justify">Simplesmente incrível. Um dos melhores sites que ja vi em todos os tempos (literalmente).</p>
						</div>
					</div>
				</div>
<!--Fim pessoas-->

<div class="page-footer mytexto">
	<div class="footer-copyright text-light text-center">© 2019 Copyright:
		<a href="index.php">NerdClub.com</a>
    </div>
</div>



<script src="js/jquery-3.4.1.js"></script>
<script src="popper/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>  
</html>
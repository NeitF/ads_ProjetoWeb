<?php
require_once("../conexao/conexao.php");
if($_POST){
    $acao = "";
    if(isset($_REQUEST["acao"])){
        $acao = $_REQUEST["acao"];
    }

    session_start();
	
    //Cadastrar
    if($acao == "reacadastro"){
        $nome = $_REQUEST["nome"];
        $sobrenome = $_REQUEST["sobrenome"];
        $email = $_REQUEST["email"];
        $senha = $_REQUEST["senha"];
        $verisenha = $_REQUEST["verisenha"];
        $idade = $_REQUEST["idade"];

        if($senha != $verisenha){
            echo "<script>alert('As senha não são idênticas')</script>";
            echo "<script>window.location.href='login-index.php?acao=cadastro'</script>";
        }else{
            //Verificando se o email inserido já está cadastrado
        $teste = "select * from tblCadastro where email = "."'$email'";
        $result = mysqli_query($conexao, $teste);
        if(mysqli_affected_rows($conexao) > 0){
            echo "<script>alert('Este email ja está cadastrado. Por favor, insira outro')</script>";
            echo "<script>window.location.href='login-index.php?acao=cadastro'</script>";
        }else{
        $sqlstring = "insert into tblCadastro (id, nome, sobrenome, email, senha, verisenha, idade) values (NULL ,";
        $sqlstring .= "'".$nome."',";
        $sqlstring .= "'".$sobrenome."',";
        $sqlstring .= "'".$email."',";
        $sqlstring .= "'".$senha."',";
        $sqlstring .= "'".$verisenha."',";
        $sqlstring .= "".$idade.")";

        mysqli_query($conexao, $sqlstring);
        if(mysqli_affected_rows($conexao) > 0){
            echo "<script>alert('Cadastrado com sucesso')</script>";
            echo "<script>window.location.href='../index.php'</script>";
        }else{
          echo "<script>alert('Erro ao cadastrar')</script>";
          echo "<script>window.location.href='login-index.php?acao=cadastro'</script>";
        }
        }
        }

      //Login  
    }else if($acao == "login"){
      $logemail = $_REQUEST["logemail"];
      $logsenha = $_REQUEST["logsenha"];

      $sqlstring = "select * from tblCadastro where email = "."'$logemail'";
      mysqli_query($conexao, $sqlstring);
      if(mysqli_affected_rows($conexao) > 0){
        $sqlstring = "select * from tblCadastro where senha ="."'$logsenha'";
        $result = mysqli_query($conexao, $sqlstring);
        if(mysqli_affected_rows($conexao) > 0){
            echo "<script>alert('Logado com sucesso')</script>";
        }else{
            echo "<script>alert('Senha incorreta')</script>";
        }
      }else{
        echo "<script>alert('Email incorreto')</script>";
      }
    //Login admin
    }else if($acao == "admLogin"){
      $logemail = $_REQUEST["logemail"];
      $logsenha = $_REQUEST["logsenha"];

      $sqlstring = "select * from tblAdmin where adm_email =" ."'$logemail'";
      $result = mysqli_query($conexao, $sqlstring);
      if(mysqli_affected_rows($conexao) > 0){
          $sqlstring = "select * from tblAdmin where adm_senha =" ."'$logsenha'";
          $result = mysqli_query($conexao, $sqlstring);
          if(mysqli_affected_rows($conexao) > 0){
              //Manda o email que o Admin inseriu para a página Dashboard
               $_SESSION['EmailAdmin'] = $logemail;
               echo "<script>window.location.href='dashboard.php'</script>"; 
          }else{
              echo "<script>alert('Dados inseridos inválidos')</script>";
          }
      }else{
          echo "<script>alert('Dados inseridos inválidos')</script>";
      }
    }
}
?>

<html lang="pt-br">
    <head>
        <title>NerdClub</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device=width, initial-scale = 1.0">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../fontawesome/css/all.css">
        <link rel="stylesheet" type="text/css" href="../mycss/estilos.css">
        <script language="jscript" type="text/jscript">
            function fnLogin(opcao){
                document.frmLogin.action="./login-index.php?acao=" + opcao;
                document.frmLogin.submit();

                return false;
            }
        </script>
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


<form name="frmLogin" action="" method="post" >
<?php
   if(isset($_REQUEST["acao"])){
       if($_REQUEST["acao"] == 'cadastro'){
           require_once("./cadastro.php");
       }else if($_REQUEST["acao"] == 'voltar'){
           require_once("./login-box.php");
       }else{
           require_once("./login-box.php");
       }
   }else{
       require_once("./login-box.php");
   }
?>
</form>   
<script src="../js/jquery-3.4.1.js"></script>
<script src="../popper/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>   
</html>
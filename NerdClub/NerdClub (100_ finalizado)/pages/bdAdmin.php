<?php 
//Exibir dados do banco na table de admins
$consulta = "select * from tblAdmin";
$con = mysqli_query($conexao, $consulta);

//Pega o email que o admin digitou na página anterior e armazena em um variável
session_start();
$EmailAdmin = $_SESSION['EmailAdmin'];

//Exibir nome e ID do ADM que logou
$name = "select * from tblAdmin where adm_email =" ."'$EmailAdmin'";
$con2 = mysqli_query($conexao, $name);
$registro2 = mysqli_fetch_array($con2);
$NomeAdmin = $registro2['adm_nome'];
$SobrenomeAdmin = $registro2['adm_sobrenome'];
$IdAdmin = $registro2['adm_id'];
$FotoAdmin = $registro2['adm_foto'];


//Criação das variáveis para o echo na consulta
$admNome = "";
$admSobrenome = "";
$admEmail = "";
$admSenha = "";
$admVeriSenha = "";
$admIdade = "";

if($_POST){
    if(isset($_REQUEST["acao"])){
        $acao = $_REQUEST["acao"];
    }

    //Inserir Admin
    if($acao == "admInserir"){
        $admNome = $_REQUEST["admNome"];
        $admSobrenome = $_REQUEST["admSobrenome"];
        $admEmail = $_REQUEST["admEmail"];
        $admSenha = $_REQUEST["admSenha"];
        $admVeriSenha = $_REQUEST["admVeriSenha"];
        $admIdade = $_REQUEST["admIdade"];

        if(isset($_FILES['admFoto'])){
            $extensao = strtolower(substr($_FILES['admFoto']['name'], -4)); //Pega a extensão do arquivo
            $novo_nome = md5(time()) .$extensao; //Define nome do arquivo
            $diretorio = "perfil/"; //Define o diretório para onde o arquivo será enviado
            move_uploaded_file($_FILES['admFoto']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
        }

        if($admSenha != $admVeriSenha){
            //Verficando se as senha são iguais
            echo "<script>alert('As senha não são idênticas')</script>";
        }else{
            //Verficando se o email ja está cadastrado
            $teste = "select * from tblAdmin where adm_email =" ."'$admEmail'";
            $result = mysqli_query($conexao, $teste);
            if(mysqli_affected_rows($conexao) > 0){
                echo "<script>alert('Este email ja está cadastrado. Por favor, insira outro')</script>";
            }else{
                $sqlstring = "insert into tblAdmin (adm_id, adm_nome, adm_sobrenome, adm_email, adm_senha, adm_verisenha, adm_idade, adm_foto) values (NULL ,";
                $sqlstring .= "'".$admNome."',";
                $sqlstring .= "'".$admSobrenome."',";
                $sqlstring .= "'".$admEmail."',";
                $sqlstring .= "'".$admSenha."',";
                $sqlstring .= "'".$admVeriSenha."',";
                $sqlstring .= "".$admIdade.",";
                $sqlstring .= "'".$novo_nome."')";

                $result = mysqli_query($conexao, $sqlstring);
                if(mysqli_affected_rows($conexao) > 0){
                    echo "<script>alert('Administrador cadastrado com sucesso')</script>";
                    echo "<script>window.location.href='dashboard.php'</script>";
                }else{
                    echo "<script>alert('Erro ao cadastrar')</script>";
                }
            }
        }
    //Consultar Admin
    }else if($acao == "admConsultar"){
        $admID = $_REQUEST["admID"];
       
        $sqlstring = "select * from tblAdmin where adm_id =" .$admID;
        $result = mysqli_query($conexao, $sqlstring);
        if(mysqli_affected_rows($conexao) > 0){
            $registro = mysqli_fetch_array($result);
            $admNome = $registro["adm_nome"];
            $admSobrenome = $registro["adm_sobrenome"];
            $admEmail = $registro["adm_email"];
            $admSenha = $registro["adm_senha"];
            $admIdade = $registro["adm_idade"];
        }else{
           echo "<script>alert('ID não encontrada')</script>";
        }
    //Alterar Admin    
    }else if($acao == 'admAlterar'){
        $admID = $_REQUEST["admID"];
        $admNome = $_REQUEST["admNome"];
        $admSobrenome = $_REQUEST["admSobrenome"];
        $admEmail = $_REQUEST["admEmail"];
        $admSenha = $_REQUEST["admSenha"];
        $admIdade = $_REQUEST["admIdade"];

        $sqlstring = "select * from tblAdmin where adm_id =" .$admID;
        $result = mysqli_query($conexao, $sqlstring);
        if(mysqli_affected_rows($conexao) > 0){
            $sqlstring = "update tblAdmin set ";
            $sqlstring .= "adm_nome = '".$admNome."',";
            $sqlstring .= "adm_sobrenome = '".$admSobrenome."',";
            $sqlstring .= "adm_email = '".$admEmail."',";
            $sqlstring .= "adm_senha = '".$admSenha."',";
            $sqlstring .= "adm_idade = ".$admIdade." ";
            $sqlstring .= "where adm_id = ".$admID;

            $result = mysqli_query($conexao, $sqlstring);
            if(mysqli_affected_rows($conexao) > 0){
                echo "<script>alert('Alterado com sucesso')</script>";
                echo "<script>window.location.href='dashboard.php'</script>";
            }else{
                echo "<script>alert('Erro ao alterar')</script>";
            }
        }else{
            echo "<script>alert('ID Não encontrada')</script>";
        }
    //Excluir Admin    
    }else if($acao == 'admExcluir'){    
        $admID = $_REQUEST["admID"];
        if($admID == $IdAdmin){
            echo "<script>alert('Não é possível excluir esse usuário, pois ele está logado no momento')</script>";
        }else{
            $sqlstring = "select * from tblAdmin where adm_id =" .$admID;
            $result = mysqli_query($conexao, $sqlstring);
            if(mysqli_affected_rows($conexao) > 0){
                $sqlstring = "delete from tblAdmin where adm_id =" .$admID;
                $result = mysqli_query($conexao, $sqlstring);
                if(mysqli_affected_rows($conexao) > 0){
                    echo "<script>alert('Administrador excluído com sucesso')</script>";
                    echo "<script>window.location.href='dashboard.php'</script>";
                }else{
                    echo "<script>alert('Erro ao excluir')</script>";
                }
            }else{
                echo "<script>alert('ID Não encontrada')</script>";
            }
        }

    }
}

?>
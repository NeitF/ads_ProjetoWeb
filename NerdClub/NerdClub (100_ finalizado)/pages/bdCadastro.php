<?php 
//Exibir dados do banco na table de cadastrados
$consulta2 = "select * from tblCadastro";
$con2 = mysqli_query($conexao, $consulta2);

//Criação das variáveis para o echo na consulta
$userNome = "";
$userSobrenome = "";
$userEmail = "";
$userSenha = "";
$userVeriSenha = "";
$userIdade = "";

if($_POST){
    if(isset($_REQUEST["acao"])){
        $acao = $_REQUEST["acao"];
    }

    //Inserir Usuário
    if($acao == "userInserir"){
        $userNome = $_REQUEST["userNome"];
        $userSobrenome = $_REQUEST["userSobrenome"];
        $userEmail = $_REQUEST["userEmail"];
        $userSenha = $_REQUEST["userSenha"];
        $userVeriSenha = $_REQUEST["userVeriSenha"];
        $userIdade = $_REQUEST["userIdade"];

        if(isset($_FILES['userFoto'])){
            $extensao = strtolower(substr($_FILES['userFoto']['name'], -4)); //Pega a extensão do arquivo
            $novo_nome = md5(time()) .$extensao; //Define nome do arquivo
            $diretorio = "perfil/"; //Define o diretório para onde o arquivo será enviado
            move_uploaded_file($_FILES['userFoto']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
        }

        if($userSenha != $userVeriSenha){
            //Verficando se as senha são iguais
            echo "<script>alert('As senha não são idênticas')</script>";
        }else{
            //Verficando se o email ja está cadastrado
            $teste = "select * from tblCadastro where email =" ."'$userEmail'";
            $result = mysqli_query($conexao, $teste);
            if(mysqli_affected_rows($conexao) > 0){
                echo "<script>alert('Este email ja está cadastrado. Por favor, insira outro')</script>";
            }else{
                $sqlstring = "insert into tblCadastro (id, nome, sobrenome, email, senha, verisenha, idade, foto) values (NULL ,";
                $sqlstring .= "'".$userNome."',";
                $sqlstring .= "'".$userSobrenome."',";
                $sqlstring .= "'".$userEmail."',";
                $sqlstring .= "'".$userSenha."',";
                $sqlstring .= "'".$userVeriSenha."',";
                $sqlstring .= "".$userIdade.",";
                $sqlstring .= "'".$novo_nome."')";

                $result = mysqli_query($conexao, $sqlstring);
                if(mysqli_affected_rows($conexao) > 0){
                    echo "<script>alert('Usuário cadastrado com sucesso')</script>";
                    echo "<script>window.location.href='dashboard.php'</script>";
                }else{
                    echo "<script>alert('Erro ao cadastrar')</script>";
                }
            }
        }
    //Consultar Usuário
    }else if($acao == "userConsultar"){
        $userID = $_REQUEST["userID"];
       
        $sqlstring = "select * from tblCadastro where id =" .$userID;
        $result = mysqli_query($conexao, $sqlstring);
        if(mysqli_affected_rows($conexao) > 0){
            $registro = mysqli_fetch_array($result);
            $userNome = $registro["nome"];
            $userSobrenome = $registro["sobrenome"];
            $userEmail = $registro["email"];
            $userSenha = $registro["senha"];
            $userIdade = $registro["idade"];
        }else{
           echo "<script>alert('ID não encontrada')</script>";
        }
    //Alterar Usuário 
    }else if($acao == 'userAlterar'){
        $userID = $_REQUEST["userID"];
        $userNome = $_REQUEST["userNome"];
        $userSobrenome = $_REQUEST["userSobrenome"];
        $userEmail = $_REQUEST["userEmail"];
        $userSenha = $_REQUEST["userSenha"];
        $userIdade = $_REQUEST["userIdade"];

        $sqlstring = "select * from tblCadastro where id =" .$userID;
        $result = mysqli_query($conexao, $sqlstring);
        if(mysqli_affected_rows($conexao) > 0){
            $sqlstring = "update tblCadastro set ";
            $sqlstring .= "nome = '".$userNome."',";
            $sqlstring .= "sobrenome = '".$userSobrenome."',";
            $sqlstring .= "email = '".$userEmail."',";
            $sqlstring .= "senha = '".$userSenha."',";
            $sqlstring .= "idade = ".$userIdade." ";
            $sqlstring .= "where id = ".$userID;

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
    //Excluir Usuário 
    }else if($acao == 'userExcluir'){
        $userID = $_REQUEST["userID"];
            $sqlstring = "select * from tblCadastro where id =" .$userID;
            $result = mysqli_query($conexao, $sqlstring);
            if(mysqli_affected_rows($conexao) > 0){
                $sqlstring = "delete from tblCadastro where id =" .$userID;
                $result = mysqli_query($conexao, $sqlstring);
                if(mysqli_affected_rows($conexao) > 0){
                    echo "<script>alert('Usuário excluído com sucesso')</script>";
                    echo "<script>window.location.href='dashboard.php'</script>";
                }else{
                    echo "<script>alert('Erro ao excluir')</script>";
                }
            }else{
                echo "<script>alert('ID Não encontrada')</script>";
            }   
    }
}
?>
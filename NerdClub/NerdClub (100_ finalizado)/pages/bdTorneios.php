<?php
//Exibir dados do banco na table de torneios
$consulta5 = "select * from tblTorneios";
$con5 = mysqli_query($conexao, $consulta5);

//Criação das variáveis para o echo na consulta
$torNome = "";
$torDesc = "";
$torCriador = "";

if($_POST){
    if(isset($_REQUEST["acao"])){
        $acao = $_REQUEST["acao"];
    }

     //Inserir Torneio
     if($acao == "torInserir"){
        $torNome = $_REQUEST["torNome"];
        $torDesc = $_REQUEST["torDesc"];
        $torCriador = $_REQUEST["torCriador"];

        if(isset($_FILES['torFoto'])){
            $extensao = strtolower(substr($_FILES['torFoto']['name'], -4)); //Pega a extensão do arquivo
            $novo_nome = md5(time()) .$extensao; //Define nome do arquivo
            $diretorio = "perfil/"; //Define o diretório para onde o arquivo será enviado
            move_uploaded_file($_FILES['torFoto']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
        }

                $sqlstring = "insert into tblTorneios (torneio_id, torneio_nome, torneio_descricao, torneio_criador, torneio_foto) values (NULL ,";
                $sqlstring .= "'".$torNome."',";
                $sqlstring .= "'".$torDesc."',";
                $sqlstring .= "'".$torCriador."',";
                $sqlstring .= "'".$novo_nome."')";

                $result = mysqli_query($conexao, $sqlstring);
                if(mysqli_affected_rows($conexao) > 0){
                    echo "<script>alert('Torneio cadastrado com sucesso')</script>";
                    echo "<script>window.location.href='dashboard.php?acao=torneios'</script>";
                }else{
                    echo "<script>alert('Erro ao cadastrar')</script>";
                }
            
        
    //Consultar Torneio
    }else if($acao == "torConsultar"){
        $torID = $_REQUEST["torID"];
       
        $sqlstring = "select * from tblTorneios where torneio_id =" .$torID;
        $result = mysqli_query($conexao, $sqlstring);
        if(mysqli_affected_rows($conexao) > 0){
            $registro = mysqli_fetch_array($result);
            $torNome = $registro["torneio_nome"];
            $torDesc = $registro["torneio_descricao"];
            $torCriador = $registro["torneio_criador"];
        }else{
           echo "<script>alert('ID não encontrada')</script>";
        }
    //Alterar Torneio  
    }else if($acao == 'torAlterar'){
        $torID = $_REQUEST["torID"];
        $torNome = $_REQUEST["torNome"];
        $torDesc = $_REQUEST["torDesc"];
        $torCriador = $_REQUEST["torCriador"];

        $sqlstring = "select * from tblTorneios where torneio_id =" .$torID;
        $result = mysqli_query($conexao, $sqlstring);
        if(mysqli_affected_rows($conexao) > 0){
            $sqlstring = "update tblTorneios set ";
            $sqlstring .= "torneio_nome = '".$torNome."',";
            $sqlstring .= "torneio_descricao = '".$torDesc."',";
            $sqlstring .= "torneio_criador = '".$torCriador."' ";
            $sqlstring .= "where torneio_id = ".$torID;

            $result = mysqli_query($conexao, $sqlstring);
            if(mysqli_affected_rows($conexao) > 0){
                echo "<script>alert('Alterado com sucesso')</script>";
                echo "<script>window.location.href='dashboard.php?acao=torneios'</script>";
            }else{
                echo "<script>alert('Erro ao alterar')</script>";
            }
        }else{
            echo "<script>alert('ID Não encontrada')</script>";
        }
    //Excluir Torneio   
    }else if($acao == 'torExcluir'){    
        $torID = $_REQUEST["torID"];
            $sqlstring = "select * from tblTorneios where torneio_id =" .$torID;
            $result = mysqli_query($conexao, $sqlstring);
            if(mysqli_affected_rows($conexao) > 0){
                $sqlstring = "delete from tblTorneios where torneio_id =" .$torID;
                $result = mysqli_query($conexao, $sqlstring);
                if(mysqli_affected_rows($conexao) > 0){
                    echo "<script>alert('Torneio excluído com sucesso')</script>";
                    echo "<script>window.location.href='dashboard.php?acao=torneios'</script>";
                }else{
                    echo "<script>alert('Erro ao excluir')</script>";
                }
            }else{
                echo "<script>alert('ID Não encontrada')</script>";
            }
    }
}
?>
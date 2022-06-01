<?php
//Exibir dados do banco na table de admins
$consulta4 = "select * from tblNoticias";
$con4 = mysqli_query($conexao, $consulta4);

//Criação das variáveis para o echo na consulta
$notiAssunto = "";
$notiTitulo = "";
;

if($_POST){
    if(isset($_REQUEST["acao"])){
        $acao = $_REQUEST["acao"];
    }

    //Inserir Notícia
    if($acao == "notiInserir"){
        $notiTitulo = $_REQUEST["notiTitulo"];
        $notiAssunto = $_REQUEST["notiAssunto"];

        if(isset($_FILES['notiFoto'])){
            $extensao = strtolower(substr($_FILES['notiFoto']['name'], -4)); //Pega a extensão do arquivo
            $novo_nome = md5(time()) .$extensao; //Define nome do arquivo
            $diretorio = "perfil/"; //Define o diretório para onde o arquivo será enviado
            move_uploaded_file($_FILES['notiFoto']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
        }
        
                $sqlstring = "insert into tblNoticias (noti_id, noti_titulo, noti_assunto, noti_foto) values (NULL ,";
                $sqlstring .= "'".$notiTitulo."',";
                $sqlstring .= "'".$notiAssunto."',";
                $sqlstring .= "'".$novo_nome."')";

                $result = mysqli_query($conexao, $sqlstring);
                if(mysqli_affected_rows($conexao) > 0){
                    echo "<script>alert('Notícia cadastrada com sucesso')</script>";
                    echo "<script>window.location.href='dashboard.php?acao=noticias'</script>";
                }else{
                    echo "<script>alert('Erro ao cadastrar')</script>";
                }
            
        
    //Consultar Notícia
    }else if($acao == "notiConsultar"){
        $notiID = $_REQUEST["notiID"];
       
        $sqlstring = "select * from tblNoticias where noti_id =" .$notiID;
        $result = mysqli_query($conexao, $sqlstring);
        if(mysqli_affected_rows($conexao) > 0){
            $registro = mysqli_fetch_array($result);
            $notiTitulo = $registro["noti_titulo"];
            $notiAssunto = $registro["noti_assunto"];
        }else{
           echo "<script>alert('ID não encontrada')</script>";
        }
    //Alterar Notícia   
    }else if($acao == 'notiAlterar'){
        $notiID = $_REQUEST["notiID"];
        $notiTitulo = $_REQUEST["notiTitulo"];
        $notiAssunto = $_REQUEST["notiAssunto"];
   

        $sqlstring = "select * from tblNoticias where noti_id =" .$notiID;
        $result = mysqli_query($conexao, $sqlstring);
        if(mysqli_affected_rows($conexao) > 0){
            $sqlstring = "update tblNoticias set ";
            $sqlstring .= "noti_titulo = '".$notiTitulo."',";
            $sqlstring .= "noti_assunto = '".$notiAssunto."' ";
            $sqlstring .= "where noti_id = ".$notiID;

            $result = mysqli_query($conexao, $sqlstring);
            if(mysqli_affected_rows($conexao) > 0){
                echo "<script>alert('Alterado com sucesso')</script>";
                echo "<script>window.location.href='dashboard.php?acao=noticias'</script>";
            }else{
                echo "<script>alert('Erro ao alterar')</script>";
            }
        }else{
            echo "<script>alert('ID Não encontrada')</script>";
        }
    //Excluir Notícia   
    }else if($acao == 'notiExcluir'){    
        $notiID = $_REQUEST["notiID"];
        
            $sqlstring = "select * from tblNoticias where noti_id =" .$notiID;
            $result = mysqli_query($conexao, $sqlstring);
            if(mysqli_affected_rows($conexao) > 0){
                $sqlstring = "delete from tblNoticias where noti_id =" .$notiID;
                $result = mysqli_query($conexao, $sqlstring);
                if(mysqli_affected_rows($conexao) > 0){
                    echo "<script>alert('Notícia excluída com sucesso')</script>";
                    echo "<script>window.location.href='dashboard.php?acao=noticias'</script>";
                }else{
                    echo "<script>alert('Erro ao excluir')</script>";
                }
            }else{
                echo "<script>alert('ID Não encontrada')</script>";
            }
        

    }


}
?>
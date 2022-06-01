<?php
//Exibir dados do banco na table de produtos
$consulta3 = "select * from tblLoja";
$con3 = mysqli_query($conexao, $consulta3);

//Criação das variáveis para o echo na consulta
$prodFabricante = "";
$prodNome = "";
$prodDescricao = "";
$prodPreco = "";
$prodQuant = "";

if($_POST){
    if(isset($_REQUEST["acao"])){
        $acao = $_REQUEST["acao"];
    }

    //Inserir Produto
    if($acao == "prodInserir"){
        $prodFabricante = $_REQUEST["prodFabricante"];
        $prodNome = $_REQUEST["prodNome"];
        $prodDescricao = $_REQUEST["prodDescricao"];
        $prodPreco = $_REQUEST["prodPreco"];
        $prodQuant = $_REQUEST["prodQuant"];

        if(isset($_FILES['prodFoto'])){
            $extensao = strtolower(substr($_FILES['prodFoto']['name'], -4)); //Pega a extensão do arquivo
            $novo_nome = md5(time()) .$extensao; //Define nome do arquivo
            $diretorio = "perfil/"; //Define o diretório para onde o arquivo será enviado
            move_uploaded_file($_FILES['prodFoto']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
        }

                $sqlstring = "insert into tblLoja (prod_id, prod_fabricante, prod_nome, prod_qntd, prod_descricao, prod_preco, prod_foto) values (NULL ,";
                $sqlstring .= "'".$prodFabricante."',";
                $sqlstring .= "'".$prodNome."',";
                $sqlstring .= "'".$prodQuant."',";
                $sqlstring .= "'".$prodDescricao."',";
                $sqlstring .= "'".$prodPreco."',";
                $sqlstring .= "'".$novo_nome."')";

                $result = mysqli_query($conexao, $sqlstring);
                if(mysqli_affected_rows($conexao) > 0){
                    echo "<script>alert('Produto cadastrado com sucesso')</script>";
                    echo "<script>window.location.href='dashboard.php?acao=loja'</script>";
                }else{
                    echo "<script>alert('Erro ao cadastrar')</script>";
                    echo "<script>window.location.href='dashboard.php?acao=loja'</script>";
                }
            
        
    //Consultar Produto
    }else if($acao == "prodConsultar"){
        $prodID = $_REQUEST["prodID"];
       
        $sqlstring = "select * from tblLoja where prod_id =" .$prodID;
        $result = mysqli_query($conexao, $sqlstring);
        if(mysqli_affected_rows($conexao) > 0){
            $registro = mysqli_fetch_array($result);
            $prodFabricante = $registro["prod_fabricante"];
            $prodNome = $registro["prod_nome"];
            $prodDescricao = $registro["prod_descricao"];
            $prodPreco = $registro["prod_preco"];
            $prodQuant = $registro["prod_qntd"];
        }else{
           echo "<script>alert('ID não encontrada')</script>";
        }
    //Alterar Produto 
    }else if($acao == 'prodAlterar'){
        $prodID = $_REQUEST["prodID"];
        $prodFabricante = $_REQUEST["prodFabricante"];
        $prodNome = $_REQUEST["prodNome"];
        $prodDescricao = $_REQUEST["prodDescricao"];
        $prodPreco = $_REQUEST["prodPreco"];
        $prodQuant = $_REQUEST["prodQuant"];

        $sqlstring = "select * from tblLoja where prod_id =" .$prodID;
        $result = mysqli_query($conexao, $sqlstring);
        if(mysqli_affected_rows($conexao) > 0){
            $sqlstring = "update tblLoja set ";
            $sqlstring .= "prod_fabricante = '".$prodFabricante."',";
            $sqlstring .= "prod_nome = '".$prodNome."',";
            $sqlstring .= "prod_descricao = '".$prodDescricao."',";
            $sqlstring .= "prod_preco = '".$prodPreco."',";
            $sqlstring .= "prod_qntd = ".$prodQuant." ";
            $sqlstring .= "where prod_id = ".$prodID;

            $result = mysqli_query($conexao, $sqlstring);
            if(mysqli_affected_rows($conexao) > 0){
                echo "<script>alert('Alterado com sucesso')</script>";
                echo "<script>window.location.href='dashboard.php?acao=loja'</script>";
            }else{
                echo "<script>alert('Erro ao alterar')</script>";
            }
        }else{
            echo "<script>alert('ID Não encontrada')</script>";
        }
    //Excluir Admin 
    }else if($acao == 'prodExcluir'){
        $prodID = $_REQUEST["prodID"];
            $sqlstring = "select * from tblLoja where prod_id =" .$prodID;
            $result = mysqli_query($conexao, $sqlstring);
            if(mysqli_affected_rows($conexao) > 0){
                $sqlstring = "delete from tblLoja where prod_id =" .$prodID;
                $result = mysqli_query($conexao, $sqlstring);
                if(mysqli_affected_rows($conexao) > 0){
                    echo "<script>alert('Produto excluído com sucesso')</script>";
                    echo "<script>window.location.href='dashboard.php?acao=loja'</script>";
                }else{
                    echo "<script>alert('Erro ao excluir')</script>";
                }
            }else{
                echo "<script>alert('ID Não encontrada')</script>";
            }     
    }
}
?>
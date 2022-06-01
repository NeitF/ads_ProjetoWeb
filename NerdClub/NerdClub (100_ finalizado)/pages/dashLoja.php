<!-- Usuários -->
<div class="form-row">
        <div class="form-group col-1 mt-5">
                <label>ID:</label>
                <input type="number" name="prodID" id="prodID" class="form-control">
            </div>
            <div class="form-group col-3 mt-5">
                <label>Fabricante:</label>
                <input type="text" name="prodFabricante" id="prodFabricante" class="form-control" value=<?php echo $prodFabricante; ?>>
            </div>
            <div class="form-group col-4 mt-5">
                <label>Nome do produto:</label>
                <input type="text" name="prodNome" id="prodNome" class="form-control" value=<?php echo $prodNome; ?>>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-8">
                <label>Descrição:</label>
                <textarea class="form-control" name="prodDescricao" id="prodDescricao" rows="5"><?php echo $prodDescricao; ?></textarea>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-3">
                <label>Preço:</label>
                <input type="number" name="prodPreco" id="prodPreco" class="form-control" value=<?php echo $prodPreco; ?>>
            </div>
            <div class="form-group col-2">
                <label>Quantidade:</label>
                <input type="number" name="prodQuant" id="prodQuant" class="form-control" value=<?php echo $prodQuant; ?>>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-4">
                <label>Foto do produto: </label>
                <input type="file" class="form-control-file" id="prodFoto" name="prodFoto">
            </div>
        </div>
        <a href="#" onClick="fnDash('prodInserir')" class="btn btn-primary">Inserir</a>
        <a href="#" onClick="fnDash('prodConsultar')" class="btn btn-primary">Consultar</a>
        <a href="#" onClick="fnDash('prodAlterar')" class="btn btn-primary">Alterar</a>
        <a href="#" onClick="fnDash('prodExcluir')" class="btn btn-danger">Excluir</a>
        <!-- Admins --> 

        <!-- Tabela Admins -->
<p class="mt-5"><h1>Tabela de itens cadastrados</h1>
<table class="table table-dark">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Fabricante</th>
            <th scope="col">Nome Produto</th>
            <th scope="col">Descrição</th>
            <th scope="col">Preço</th>
            <th scope="col">Quantidade</th>
        </tr>
    </thead>
    <tbody>
    <?php while($dados3 = mysqli_fetch_array($con3)){ ?>
        <tr>
            <th scope="row"><?php echo $dados3["prod_id"]?></th>
            <td><?php echo $dados3["prod_fabricante"]?></td>
            <td><?php echo $dados3["prod_nome"]?></td>
            <td><?php echo $dados3["prod_descricao"]?></td>
            <td><?php echo $dados3["prod_preco"]?></td>
            <td><?php echo $dados3["prod_qntd"]?></td>
        </tr>
    <?php } ?>    
    </tbody>
</table>
<!-- Tabela Usuários -->
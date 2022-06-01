<!-- Usuários -->
<div class="form-row">
        <div class="form-group col-1 mt-5">
                <label>ID:</label>
                <input type="number" name="torID" id="torID" class="form-control">
            </div>
            <div class="form-group col-3 mt-5">
                <label>Nome do torneio:</label>
                <input type="text" name="torNome" id="torNome" class="form-control" value=<?php echo $torNome; ?>>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-8">
                <label>Descrição:</label>
                <textarea class="form-control" name="torDesc" id="torDesc" rows="5"><?php echo $torDesc; ?></textarea>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-3">
                <label>Criador:</label>
                <input type="text" name="torCriador" id="torCriador" class="form-control" value=<?php echo $torCriador; ?>>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-4">
                <label>Foto de capa do torneio: </label>
                <input type="file" class="form-control-file" id="torFoto" name="torFoto">
            </div>
        </div>
        <a href="#" onClick="fnDash('torInserir')" class="btn btn-primary">Inserir</a>
        <a href="#" onClick="fnDash('torConsultar')" class="btn btn-primary">Consultar</a>
        <a href="#" onClick="fnDash('torAlterar')" class="btn btn-primary">Alterar</a>
        <a href="#" onClick="fnDash('torExcluir')" class="btn btn-danger">Excluir</a>
        <!-- Admins --> 

        <!-- Tabela Admins -->
<p class="mt-5"><h1>Tabela de Torneios cadastrados</h1>
<table class="table table-dark">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome do torneio</th>
            <th scope="col">Descrição</th>
            <th scope="col">Criador</th>
        </tr>
    </thead>
    <tbody>
    <?php while($dados5 = mysqli_fetch_array($con5)){ ?>
        <tr>
            <th scope="row"><?php echo $dados5["torneio_id"]?></th>
            <td><?php echo $dados5["torneio_nome"]?></td>
            <td><?php echo $dados5["torneio_descricao"]?></td>
            <td><?php echo $dados5["torneio_criador"]?></td>
        </tr>
    <?php } ?>    
    </tbody>
</table>
<!-- Tabela Usuários -->
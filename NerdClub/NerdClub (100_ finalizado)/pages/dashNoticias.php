<!-- Usuários -->
<div class="form-row">
        <div class="form-group col-1 mt-5">
                <label>ID:</label>
                <input type="number" name="notiID" id="notiID" class="form-control">
            </div>
            <div class="form-group col-3 mt-5">
                <label>Título</label>
                <input type="text" name="notiTitulo" id="notiTitulo" class="form-control" value=<?php echo $notiTitulo; ?>>
            </div>
            <div class="form-group col-4 mt-5">
                <label>Assunto: </label>
                <input type="text" name="notiAssunto" id="notiAssunto" class="form-control" value=<?php echo $notiAssunto; ?>>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-4">
                <label>Foto de capa: </label>
                <input type="file" class="form-control-file" id="notiFoto" name="notiFoto">
            </div>
        </div>
        <a href="#" onClick="fnDash('notiInserir')" class="btn btn-primary">Inserir</a>
        <a href="#" onClick="fnDash('notiConsultar')" class="btn btn-primary">Consultar</a>
        <a href="#" onClick="fnDash('notiAlterar')" class="btn btn-primary">Alterar</a>
        <a href="#" onClick="fnDash('notiExcluir')" class="btn btn-danger">Excluir</a>
        <!-- Admins --> 

        <!-- Tabela Admins -->
<p class="mt-5"><h1>Tabela de Notícias cadastradas</h1>
<table class="table table-dark">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Título</th>
            <th scope="col">Assunto</th>
        </tr>
    </thead>
    <tbody>
    <?php while($dados4 = mysqli_fetch_array($con4)){ ?>
        <tr>
            <th scope="row"><?php echo $dados4["noti_id"]?></th>
            <td><?php echo $dados4["noti_titulo"]?></td>
            <td><?php echo $dados4["noti_assunto"]?></td>
        </tr>
    <?php } ?>    
    </tbody>
</table>
<!-- Tabela Usuários -->
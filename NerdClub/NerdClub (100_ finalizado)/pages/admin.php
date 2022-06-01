<!-- Admins -->
        <div class="form-row">
        <div class="form-group col-1 mt-5">
                <label>ID:</label>
                <input type="number" name="admID" id="admID" class="form-control">
            </div>
            <div class="form-group col-3 mt-5">
                <label>Nome:</label>
                <input type="text" name="admNome" id="admNome" class="form-control" value=<?php echo $admNome; ?>>
            </div>
            <div class="form-group col-4 mt-5">
                <label>Sobrenome:</label>
                <input type="text" name="admSobrenome" id="admSobrenome" class="form-control" value=<?php echo $admSobrenome; ?>>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-8">
                <label>Email:</label>
                <input type="text" name="admEmail" id="admEmail" class="form-control" value=<?php echo $admEmail; ?>>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-3">
                <label>Senha:</label>
                <input type="text" name="admSenha" id="admSenha" class="form-control" value=<?php echo $admSenha; ?>>
            </div>
            <div class="form-group col-3">
                <label>Verificação da senha:</label>
                <input type="text" name="admVeriSenha" id="admVeriSenha" class="form-control" value=<?php echo $admSenha; ?>>
            </div>
            <div class="form-group col-2">
                <label>Idade:</label>
                <input type="number" name="admIdade" id="admIdade" class="form-control" value=<?php echo $admIdade; ?>>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-4">
                <label>Foto de perfil: </label>
                <input type="file" class="form-control-file" id="admFoto" name="admFoto">
            </div>
        </div>
        <a href="#" onClick="fnDash('admInserir')" class="btn btn-primary">Inserir</a>
        <a href="#" onClick="fnDash('admConsultar')" class="btn btn-primary">Consultar</a>
        <a href="#" onClick="fnDash('admAlterar')" class="btn btn-primary">Alterar</a>
        <a href="#" onClick="fnDash('admExcluir')" class="btn btn-danger">Excluir</a>
        <!-- Admins --> 

        <!-- Tabela Admins -->
<p class="mt-5"><h1>Tabela de Administradores cadastrados</h1>
<table class="table table-dark">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Sobrenome</th>
            <th scope="col">Email</th>
            <th scope="col">Senha</th>
            <th scope="col">Idade</th>
        </tr>
    </thead>
    <tbody>
    <?php while($dados = mysqli_fetch_array($con)){ ?>
        <tr>
            <th scope="row"><?php echo $dados["adm_id"]?></th>
            <td><?php echo $dados["adm_nome"]?></td>
            <td><?php echo $dados["adm_sobrenome"]?></td>
            <td><?php echo $dados["adm_email"]?></td>
            <td><?php echo $dados["adm_senha"]?></td>
            <td><?php echo $dados["adm_idade"]?></td>
        </tr>
    <?php } ?>    
    </tbody>
</table>
<!-- Tabela Admins -->
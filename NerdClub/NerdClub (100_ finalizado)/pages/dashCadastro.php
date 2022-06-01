<!-- Usuários -->
<div class="form-row">
        <div class="form-group col-1 mt-5">
                <label>ID:</label>
                <input type="number" name="userID" id="userID" class="form-control">
            </div>
            <div class="form-group col-3 mt-5">
                <label>Nome:</label>
                <input type="text" name="userNome" id="userNome" class="form-control" value=<?php echo $userNome; ?>>
            </div>
            <div class="form-group col-4 mt-5">
                <label>Sobrenome:</label>
                <input type="text" name="userSobrenome" id="userSobrenome" class="form-control" value=<?php echo $userSobrenome; ?>>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-8">
                <label>Email:</label>
                <input type="text" name="userEmail" id="userEmail" class="form-control" value=<?php echo $userEmail; ?>>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-3">
                <label>Senha:</label>
                <input type="text" name="userSenha" id="userSenha" class="form-control" value=<?php echo $userSenha; ?>>
            </div>
            <div class="form-group col-3">
                <label>Verificação da senha:</label>
                <input type="text" name="userVeriSenha" id="userVeriSenha" class="form-control" value=<?php echo $userSenha; ?>>
            </div>
            <div class="form-group col-2">
                <label>Idade:</label>
                <input type="number" name="userIdade" id="userIdade" class="form-control" value=<?php echo $userIdade; ?>>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-4">
                <label>Foto de perfil: </label>
                <input type="file" class="form-control-file" id="userFoto" name="userFoto">
            </div>
        </div>
        <a href="#" onClick="fnDash('userInserir')" class="btn btn-primary">Inserir</a>
        <a href="#" onClick="fnDash('userConsultar')" class="btn btn-primary">Consultar</a>
        <a href="#" onClick="fnDash('userAlterar')" class="btn btn-primary">Alterar</a>
        <a href="#" onClick="fnDash('userExcluir')" class="btn btn-danger">Excluir</a>
        <!-- Admins --> 

        <!-- Tabela Admins -->
<p class="mt-5"><h1>Tabela de Usuários cadastrados</h1>
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
    <?php while($dados2 = mysqli_fetch_array($con2)){ ?>
        <tr>
            <th scope="row"><?php echo $dados2["id"]?></th>
            <td><?php echo $dados2["nome"]?></td>
            <td><?php echo $dados2["sobrenome"]?></td>
            <td><?php echo $dados2["email"]?></td>
            <td><?php echo $dados2["senha"]?></td>
            <td><?php echo $dados2["idade"]?></td>
        </tr>
    <?php } ?>    
    </tbody>
</table>
<!-- Tabela Usuários -->
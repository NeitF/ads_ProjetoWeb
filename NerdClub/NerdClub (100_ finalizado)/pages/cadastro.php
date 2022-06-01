<!-- Formulário de Cadastro-->
<div class="container">
    <div class="row">  
        <div class="sign-box">
                <!--<center><p style="font-family: saira; font-size: 60px; "><span class="red">Nerd</span><span style="color: #070501">Club</span></p></center>-->
                <center><img src="../imgs/logo.png" widht="150px" height="150px"></center>

                <div class="form-row d-flex justify-content-center" >
                    <div class="form-group col-4">
                        <label class="white">Nome:</label>
                        <input type="text" id="nome" name="nome" class="form-control">
                    </div>
                    <div class="form-group col-4">
                        <label class="white">Sobrenome:</label>
                        <input type="text" name="sobrenome" id="sobrenome" class="form-control">
                    </div>
                </div>

                <div class="form-row d-flex justify-content-center">
                    <div class="form-group col-4">
                        <label class="white">Email:</label>
                        <input type="text" name="email" id="email" class="form-control">
                    </div>
                    <div class="form-group col-4">
                        <label class="white">Idade:</label>
                        <input type="number" name="idade" id="idade" class="form-control">
                    </div>
                </div>
               
                <div class="form-row d-flex justify-content-center">
                    <div class="form-group col-4">
                        <label class="white">Senha:</label>
                        <input type="password" name="senha" id="senha" class="form-control">
                </div>

                    <div class="form-group col-4">
                        <label class="white">Repita a senha:</label>
                        <input type="password" name="verisenha" id="verisenha" class="form-control">
                    </div>
                 </div>

            <div class="centro">
                <a class="btn mybtn login-btn" onClick="fnLogin('voltar')" href="#">Voltar</a>
                <input type="button" class="btn mybtn login-btn" onClick="fnLogin('reacadastro')" value="Cadastrar">
            </div>  
        </div>
    </div>
</div>
<!--Fim do Formulário de cadastro-->






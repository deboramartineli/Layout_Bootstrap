
<?php
 
 $titulo = "Pagina Inicial";
 
 include "./cabecalho.php"; 
 ?>
 
 
<div class="row">
        <div class="offset-4 col-4">
            <h1>Formulário de Cadastro</h1>
            <form action=" ./salvar_usuario.php" method="post">
                <div class="mb-3">
                    <label class="form-label">Email </label>
                    <input type="email" class="form-control" name="Email">
                </div>
                <div class="mb-3">
                    <label class="form-label">Login</label>
                    <input type="text" class="form-control" name="Login" />
                </div>
                <div class="mb-3">
                    <label class="form-label">Nome</label>
                    <input type="text"class="form-control" name="Nome" />
                </div>
                <div class="mb-3">
                    <label class="form-label">Senha</label>
                    <input type="password" class="form-control" name="Senha" />
                </div>
                <div class="mb-3">
                    <button class="btn btn-success" type="submit">Enviar</button>     
                </div>
        </div>    
</div>

 
 <?php 
 
 include "./rodape.php";
 
 ?>
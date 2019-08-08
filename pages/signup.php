<style>
    body {
        radial-gradient(white, #a88236);
    }
</style>
<div class="container d-flex h-100 mt-5">
    <div class="flex-fill">
        <div class="row justify-content-between">
            <img src="assets/img/logo.svg" class="col-md-4 mb-sm-5">
            <div class="card col-md-7 px-0">
                <div class="card-header bg-white border-0">
                    <h3 class="my-0 text-center" style="color: hsl(50, 100%, 10%)">Criar conta</h3>
                </div>
                <div class="card-body">
                    <form method="POST">
                        <div class="form-group">
                            <label for="nome">Usuário</label>
                            <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite o nome">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelpId" placeholder="Digite o email">
                        </div>
                        <div class="form-group">
                            <label for="usuario">Usuário</label>
                            <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Digite o usuário">
                        </div>
                        <div class="form-group">
                            <label for="senha">Senha</label>
                            <input type="password" class="form-control" name="senha" id="senha" placeholder="Digite a senha">
                        </div>
                        <div class="form-group">
                            <label for="senha2">Confirme a senha</label>
                            <input type="password" class="form-control" name="senha2" id="senha2" placeholder="Confirme a senha">
                        </div>
                        <button type="submit" class="btn btn-primary">Cadastrar</button>

                    </form>
                </div>
            </div>
        </div>

    </div>

</div>
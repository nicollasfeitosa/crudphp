<!-- Modal -->
<div class="modal fade" id="createModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Cadastrar Novo Usuário</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <form action="/actions/create.php" method="post" id="createForm">
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" required minlength="3" maxlength="15">
                </div>

                <div class="mb-3">
                    <label for="sobrenome" class="form-label">Sobrenome</label>
                    <input type="text" class="form-control" name="sobrenome" id="sobrenome" placeholder="Sobrenome" required>
                </div>

                <div class="mb-3">
                    <label for="contato" class="form-label">Contato</label>
                    <input type="text" class="form-control" name="contato" id="contato" placeholder="Contato" required>
                </div>

                <div class="mb-3">
                    <label for="datanasc" class="form-label">Data de Nascimento</label>
                    <input type="date" class="form-control" name="datanasc" id="datanasc" placeholder="dd/mm/yyyy" required>
                </div>

                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="status" name="status" value="1" checked>
                    <label class="form-check-label" for="status">Esse usuário está ativo?</label>
                </div>

                <div id="loginForm">
                    <hr>
                    <div class="mb-3">
                        <label for="login" class="form-label">Login</label>
                        <input type="text" class="form-control" name="login" id="login" placeholder="Login" required>
                    </div>
                    <div class="mb-3">
                        <label for="pass" class="form-label">Senha</label>
                        <input type="password" class="form-control" name="password" id="pass" placeholder="Senha" required>
                    </div>
                </div>

            </form>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-success" id="createBtn">Cadastrar</button>
        </div>
        </div>
    </div>
</div>
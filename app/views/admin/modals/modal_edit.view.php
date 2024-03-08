<!-- Modal Editar Usuário-->
<div class="modal-user hide d-flex mx-auto justify-content-center main fech" id="modalEdit-<?=$user->id ?? '1'?>">
    <img src="" class="img-fluid mx-auto d-block" alt="" id="logo">
    <h2 class="mb-4" id="title">Edição de usuário</h2>
    <form method="" action="#">
        <div class="form-group mb-3">
            <input type="hidden" value="1" name="id">
            <label for="novousuario" class="col-sm-auto col-form-label">Novo nome do usuário:</label>
            <input type="text" name="name" id="titulo" class="form-control" value="Treinamento CRUD">
        </div>

        <div class="form-group mb-3">
            <label for="novoemail" class="col-sm-auto col-form-label">Novo e-mail:</label>
            <input type="text" name="email" id="email" class="form-control" value="treinamento@gmail.com">
        </div>

        <div class="form-group mb-3">
            <label for="novasenha" class="col-sm-auto col-form-label">Nova senha:</label>
            <input type="password"  value="" name="password" class="form-control"/>
        </div>
        <div class="form-group row">
            <div class="col-sm-6">
                <input type="submit" value="Editar" class="btn btn-lg formbtn form-control">
            </div>

            <div class="col-sm-6">
                <input type="reset" value="Limpar" class="btn btn-lg formbtn form-control">
            </div>

            <div class="botoes">
                <input class="btn btn-lg formbtn form-control align-self-center col-sm-6 fechar" type="button" value="Cancelar">
            </div>
        </div>
    </form>
</div>
<!----MODAL EXCLUIR---->
<div class="modal-user hide d-flex mx-auto overflow-hidden justify-content-center main fech" id="modalDelete-<?=$user->id ?? '1'?>">
    <img src="" class="img-fluid mx-auto d-block" alt="" id="logo">
    <h2 id="title">Deleção de Usuario</h2>
    <p class="lead text-center">Tem certeza que deseja excluir o usuário?</p>
    <div class="row d-flex justify-content-center">
        <form action="#" method="">
            <input type="hidden" value="1" name="id">
            <button type="submit" class="btn btn-lg formbtn col-md-4" >Sim</button>
            <button type="button" class="btn btn-lg formbtn col-md-4 fechar">Cancelar</button>
        </form>
    </div>
</div>
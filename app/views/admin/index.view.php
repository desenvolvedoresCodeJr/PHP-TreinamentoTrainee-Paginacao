<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>Lista de Usuários</title>

    <!--link do bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!--link do css-->
    <link rel="stylesheet" href="/app/public/css/listaUsuarios.css">
    <link rel="stylesheet" href="/app/public/css/edit_user_modal.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!--link do font awesome-->
    <script src="https://kit.fontawesome.com/b5c9f282d0.js" crossorigin="anonymous"></script>
    
    <!-- link da font utilizada -->
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

</head>
<body>
   <div class="page-container">
 
       <h1><img src="" alt="" class="img-fluid rounded m-2" id="logo-min">Lista de Usuários</h1>

       <div class="page-content">

        
        <div class="btn-adicionar">
            <button  class="add botao " type="button" data-modal="modalAdd" >Adicionar Usuário</button>
        </div>

        <div class="container-modal">
            <div class="fade-modal hide" id="fadeModal"></div>
            <div id="modalAdd" class="hide fech">
            <!--Modal Criar Usuário-->
            <?php require(__DIR__ . '/../admin/modals/modal_create.view.php') ?>
            <!---->
    
            
            <!--início da tabela de usuários-->
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col" class="number">#</th>
                        <th scope="col">Nome Completo</th>
                        <th>E-mail</th>
                        <th scope="col" class="title-acao">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>  
                        <th scope="row" class="number">1</th>
                        <td>Treinamento CRUD</td>
                        <td class="email">treinamento@gmail.com</td>
                        <td>
                            <div class="btn-acoes">
                                <button type="button">
                                    <i class="fa fa-eye botao" aria-hidden="true" data-modal="modalShow-1"></i>
                                </button>
                                <button type="button">
                                    <i class="fa fa-trash-o botao" aria-hidden="true" data-modal="modalDelete-1"></i>
                                </button>
                                <button type="button">
                                    <i class="fa fa-pencil-square-o botao" aria-hidden="true" data-modal="modalEdit-1"></i>
                                </button>
                            </div>
                        </td>
                    </tr>                  
    
                <!-- Modal Editar Usuário-->
                <?php require(__DIR__ . '/../admin/modals/modal_edit.view.php') ?>
                <!--  -->
            </div> 
            <!----MODAL EXCLUIR---->
            <?php require(__DIR__ . '/../admin/modals/modal_delete.view.php') ?>
            <!---->

            <!----MODAL VISUALIZAR--->
                <?php require(__DIR__ . '/../admin/modals/modal_show.view.php') ?>
            <!----->

        </div>
    
                </tbody>
            </table>
            <!--fim da tabela de usuários-->
        </div>
       
       </div>  
   </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <script src="/app/public/js/users_modal.js"></script>
    
</body>
</html>
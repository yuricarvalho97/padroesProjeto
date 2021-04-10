<?php include "./includes/header.php"; ?>

<div class="container">

    <!-- CADASTRO DE USUÁRIOS -->
    <div class="shadow p-3 mb-5 mt-4 bg-white rounded">
        <h3>
            Cadastro de usuários
            <i class="fa fa-user-circle-o" aria-hidden="true"></i>

        </h3>
        <hr>
        <div class="row">
            <div class="col-sm-12">
                ...
            </div>
        </div>
    </div>

    <!-- ENVIAR MENSAGEM PARA OUTROS USUÁRIOS -->
    <div class="shadow p-3 mb-5 mt-4 bg-white rounded">
        <h3>
            Usuários
            <i class="fa fa-users" aria-hidden="true"></i>
        </h3>
        <hr>
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Nome do usuário</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6 mb-2">
                                <button class="btn btn-primary w-100" data-toggle="modal" data-target="#msgEnviadas">
                                    Msg enviadas
                                    <i class="fa fa-list" aria-hidden="true"></i>
                                </button>
                            </div>
                            <div class="col-sm-6 mb-2">
                                <button class="btn btn-primary w-100" data-toggle="modal" data-target="#msgRecebidas">
                                    Msg recebidas
                                    <i class="fa fa-info-circle" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>

                        <hr>
                        <h4 class="text-center">Enviar nova mensagem</h4>

                        <form action="" method="post">
                            <label for="usuario">Usuários</label>
                            <select class="custom-select mb-3" id="usuario" required>
                                <option selected disabled value="">Escolha um usuário</option>
                                <option>...</option>
                            </select>

                            <button type="submit" class="btn btn-success w-100">
                                Enviar mensagem
                                <i class="fa fa-check" aria-hidden="true"></i>
                            </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- MODAL MENSAGENS ENVIADAS -->
    <div class="modal fade" id="msgEnviadas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Mensagens enviadas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL MENSAGENS RECEBIDAS -->
    <div class="modal fade" id="msgRecebidas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Mensagens recebidas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


</div>

<?php include "./includes/footer.php"; ?>
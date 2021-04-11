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
                <form method="post" action="">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="cmpNome">Nome</label>
                                <input type="text" class="form-control" id="cmpNome" name="cmpNome" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="cmpSobrenome">Sobrenome</label>
                                <input type="text" class="form-control" id="cmpSobrenome" name="cmpSobrenome" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="cmpEmail">E-mail</label>
                        <input type="email" class="form-control" id="cmpEmail" name="cmpEmail" required>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="cmpSenha">Senha</label>
                                <input type="password" class="form-control" id="cmpSenha" name="cmpSenha" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="cmpRedeSocial">Rede social</label>
                            <select class="custom-select" id="cmpRedeSocial" name="cmpRedeSocial" required>
                                <option selected disabled value="">Escolha uma rede social</option>
                                <option value="instagram">Instagram</option>
                                <option value="facebook">Facebook</option>
                                <option value="tipTop">Tip top</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="cmpAdmin" name="cmpAdmin" required>
                        <label class="form-check-label" for="cmpAdmin">Usuário admin</label>
                    </div>
                    <button type="submit" class="btn btn-success w-100" name="enviarFormulario">
                        Finalizar
                        <i class="fa fa-check" aria-hidden="true"></i>
                    </button>
                </form>
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
            <div class="col-sm-6 mb-1">
                <div class="card">
                    <div class="card-header">
                        <h4>Nome do usuário</h4>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-center">
                            <img class="imgUsuario" src="https://bulma.io/images/placeholders/128x128.png">
                        </div>


                        <div class="row mt-5">
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
                            <label for="cmpUsuario">Usuários</label>
                            <select class="custom-select mb-3" id="cmpUsuario" name="cmpUsuario" required>
                                <option selected disabled value="">Escolha um usuário</option>
                                <option>...</option>
                            </select>

                            <div class="form-group">
                                <label for="cmpMensagem">Conteúdo da mensagem</label>
                                <textarea class="form-control" id="cmpMensagem" name="cmpMensagem" rows="3"></textarea>
                            </div>

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
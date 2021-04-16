<?php include "./includes/header.php"; ?>

<div class="container">

    <!-- CADASTRO DE USUÁRIOS -->
    <div class="shadow p-3 mb-5 mt-4 bg-white rounded">
        <h3>
            Cadastro de usuários
            <i class="fa fa-user-circle-o" aria-hidden="true"></i>

        </h3>
        <?php
        if (isset($_SESSION['mensagem'])) { ?>
            <div class="alert alert-success" role="alert">
                <?= $_SESSION['mensagem'] ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php }
        unset($_SESSION['mensagem']) ?>
        <hr>
        <div class="row">
            <div class="col-sm-12">
                <form method="post" action="builder.php">
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

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="cmpEmail">E-mail</label>
                                <input type="email" class="form-control" id="cmpEmail" name="cmpEmail" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="cmpTelefone">Telefone</label>
                                <input type="text" class="form-control" id="cmpTelefone" name="cmpTelefone" required>
                            </div>
                        </div>
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
                                <option value="Instagram">Instagram</option>
                                <option value="Facebook">Facebook</option>
                                <option value="TipTop">TipTop</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group form-check">
                        <input type="hidden" name="cmpAdmin" value="0">
                        <input type="checkbox" class="form-check-input" id="cmpAdmin" name="cmpAdmin" value="1">
                        <label class="form-check-label" for="cmpAdmin">Usuário admin</label>
                    </div>
                    <button type="submit" class="btn btn-success w-100" name="btnEnviarFormularioUsuario">
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

        <div class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#instagram" aria-expanded="true" aria-controls="collapseOne">
                            Usuários Instagram
                        </button>
                    </h2>
                </div>

                <div id="instagram" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">

                        <!-- USUÁRIO CARD -->
                        <div class="row">
                            <?php foreach ($usuariosContas as $contas) { ?>
                                <div class="col-sm-4 mb-1">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Usuário(a) <?= $contas['Nome'] ?> </h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="d-flex justify-content-center">
                                                <img class="imgUsuario" src="https://bulma.io/images/placeholders/128x128.png">
                                            </div>


                                            <div class="row mt-5">
                                                <div class="col-sm-6 mb-2">
                                                    <button class="btn btn-primary w-100" data-toggle="modal" data-target="#msgEnviadas">
                                                        Msg env
                                                        <i class="fa fa-list" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                                <div class="col-sm-6 mb-2">
                                                    <button class="btn btn-primary w-100" data-toggle="modal" data-target="#msgRecebidas">
                                                        Msg rece.
                                                        <i class="fa fa-info-circle" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>

                                            <hr>
                                            <h4 class="text-center">Enviar nova mensagem</h4>

                                            <form action="builder.php" method="post">
                                                <input type="hidden" name="cmpMensageiro" value="<?= $contas['UsuarioID'] ?>">
                                                <label for="cmpUsuario">Usuários</label>
                                                <select class="custom-select mb-3" id="cmpUsuarioReceptor" name="cmpUsuarioReceptor" required>
                                                    <option selected disabled>Escolha um usuário</option>
                                                    <?php
                                                    foreach ($usuariosContas as $key => $opcaoUsuarios) {
                                                        if ($usuariosContas[$key]['Nome'] != $contas['Nome'])
                                                            echo "<option value=" . $opcaoUsuarios['UsuarioID'] . ">" . $opcaoUsuarios['Nome'] . "</option>";
                                                    }
                                                    ?>
                                                </select>

                                                <div class="form-group">
                                                    <label for="cmpMensagem">Conteúdo da mensagem</label>
                                                    <textarea class="form-control" id="cmpMensagem" name="cmpMensagem" rows="3" required></textarea>
                                                </div>

                                                <button type="submit" class="btn btn-success w-100" name="enviarMensagem">
                                                    Enviar mensagem
                                                    <i class="fa fa-check" aria-hidden="true"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#facebook" aria-expanded="false" aria-controls="collapseTwo">
                            Usuários Facebook
                        </button>
                    </h2>
                </div>
                <div id="facebook" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        Some placeholder content for the second accordion panel. This panel is hidden by default.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#tipTop" aria-expanded="false" aria-controls="collapseThree">
                            Usuários TipTop
                        </button>
                    </h2>
                </div>
                <div id="tipTop" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                        And lastly, the placeholder content for the third and final accordion panel. This panel is hidden by default.
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
<?php


?>

<div class="template-cadastro-page">
    <div class="container" style="justify-content: center">
        <div class="row justify-content-center card-container">
            <div class="col-md-6" style="max-width: 90% !important; flex: unset !important;">
                <div class="card" style="background-color: #282c37;">
                    <div class="card-header" style="background-color: #262a32;">
                        <h4 class="text-center text-white">Cadastro de Usuário</h4>
                    </div>
                    <div class="card-body">
                        <form id="cadastroForm">
                            <div class="form-group">
                                <label for="nome" style="color: white">Nome:</label>
                                <input type="text" class="form-control" id="nome" placeholder="Seu nome">
                            </div>
                            <div class="form-group">
                                <label for="email" style="color: white">Email:</label>
                                <input type="email" class="form-control" id="email" placeholder="Seu email">
                            </div>
                            <div class="form-group">
                                <label for="senha" style="color: white">Senha:</label>
                                <input type="password" class="form-control" id="senha" placeholder="Sua senha">
                            </div>
                            <div class="form-group">
                                <label for="personagem" style="color: white">Nickname:</label>
                                <input type="text" class="form-control" id="personagem" placeholder="Digite o nick">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="cadastroConcluidoModal" tabindex="-1" role="dialog" aria-labelledby="cadastroConcluidoModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cadastroConcluidoModalLabel">Cadastro Concluído</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-close-modal" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
</div>

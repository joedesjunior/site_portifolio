<section style="min-height: calc(100vh - 83px)" class="light-bg">

    <div class="container">
        <div class="row">
            <div class="col-lg-offset-3 col-lg-6 text-center">
                <div class="section-title">
                    <h2>Área Restrita</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-offset-5 col-lg-2 text-center">
                        <div class="form-group">
                            <a class="btn btn-link"><i class="fa fa-user"></i></a>
                            <a class="btn btn-link" href="<?= base_url(); ?>restrict_controller/logoff"><i
                                    class="fa fa-sign-out"></i></a>
                        </div>
                    </div>
                </div>
            </div>
    </div>

            <div class="container">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab_projetos" role="tab" data-toggle="tab">Projetos</a></li>
                    <li><a href="#tab_time" role="tab" data-toggle="tab">Cursos</a></li>
                    <li><a href="#tab_usuarios" role="tab" data-toggle="tab">Usuários</a></li>
                </ul>

                <div class="tab-content">
                    <div id="tab_projetos" class="tab-pane active">
                        <div class="container-fluid">
                            <h2 class="text-center">
                                <strong>
                                    Gerenciar Projetos Realizados
                                </strong>
                            </h2>
                            <a id="btn_add_projeto" class="btn btn-primary"><i class="fa fa-plus"> Adicionar
                                    Projeto</i></a>
                            <table id="dt_projetos" class="table table-striped table-bordered">
                                <thead>
                                    <tr class="tableheader">
                                        <th>Nome</th>
                                        <th>Imagem</th>
                                        <th>Duração</th>
                                        <th>Descrição</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                            </table>
                        </div>
                    </div>

                    <div id="tab_time" class="tab-pane active">
                        <div class="container-fluid">
                            <h2 class="text-center">
                                <strong>
                                    Gerenciar Cursos Realizados
                                </strong>
                            </h2>
                            <a id="btn_add_equipe" class="btn btn-primary"><i class="fa fa-plus"> Adicionar
                                    Curso</i></a>
                            <table id="dt_equipes" class="table table-striped table-bordered">
                                <thead>
                                    <tr class="tableheader">
                                        <th>Nome</th>
                                        <th>Foto</th>
                                        <th>Descrição</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>

                    <div id="tab_usuarios" class="tab-pane active">
                        <div class="container-fluid">
                            <h2 class="text-center">
                                <strong>
                                    Gerenciar Usuários do Sistema
                                </strong>
                            </h2>
                            <a id="btn_add_usuario" class="btn btn-primary"><i class="fa fa-plus"> Adicionar
                                    Usuário</i></a>
                            <table id="dt_usuarios" class="table table-striped table-bordered">
                                <thead>
                                    <tr class="tableheader">
                                        <th>Login</th>
                                        <th>Nome</th>
                                        <th>E-mail</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
</section>

<!-- Inicio da Modal de Projeto-->
<div id="modal_projeto" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">X</button>
                <h4>Projeto</h4>
            </div>
            <div class="modal-body">
                <form id="form_projeto">
                    <input name="codigo_projeto" hidden>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Nome</label>
                        <div class="col-lg-10">
                            <input id="nome_projeto" name="nome_projeto" class="form-control" maxlength="100">
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Imagem</label>
                        <div class="col-lg-10">
                            <input type="file" accept="image/*" id="foto_projeto" name="foto_projeto"
                                class="form-control">
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Duração</label>
                        <div class="col-lg-10">
                            <input type="number" min="0" id="duracao_projeto" name="duracao_projeto"
                                class="form-control">
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Descrição</label>
                        <div class="col-lg-10">
                            <textarea id="descricao_projeto" name="descricao_projeto" class="form-control"
                                maxlength="200"></textarea>
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" id="btn_save_projeto" class="btn btn-primary">
                            <i class="fa fa-save"></i> Salvar
                        </button>
                        <span class="help-block"></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--Fim da Modal de Projeto-->

<!-- Inicio da Modal de Curso -->
<div id="modal_cursos" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">X</button>
                <h4>Curso</h4>
            </div>
            <div class="modal-body">
                <form id="form_curso">
                    <input name="codigo_curso" hidden>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Nome</label>
                        <div class="col-lg-10">
                            <input id="nome_projeto" name="nome_projeto" class="form-control" maxlength="100">
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Imagem</label>
                        <div class="col-lg-10">
                            <input type="file" accept="image/*" id="imagem_curso" name="imagem_curso"
                                class="form-control">
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Duração</label>
                        <div class="col-lg-10">
                            <input type="number" min="0" id="duracao_curso" name="duracao_curso"
                                class="form-control">
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Descrição</label>
                        <div class="col-lg-10">
                            <textarea id="descricao_curso" name="descricao_curso" class="form-control"
                                maxlength="200"></textarea>
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" id="btn_save_curso" class="btn btn-primary">
                            <i class="fa fa-save"></i> Salvar
                        </button>
                        <span class="help-block"></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Fim da Modal de Curso -->

<!-- Inicio da Modal de Usuarios -->
<div id="modal_usuarios" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">X</button>
                <h4>Usuários</h4>
            </div>
            <div class="modal-body">
                <form id="form_curso">
                    <input name="codigo_usuario" hidden>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Login</label>
                        <div class="col-lg-10">
                            <input id="login_usuario" name="login_usuario" class="form-control" maxlength="100">
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Senha</label>
                        <div class="col-lg-10">
                            <input type="password" id="senha_usuario_hash" name="senha_usuario_hash"
                                class="form-control">
                            <span class="help-block"></span>
                        </div>
                    </div>

                    
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Nome Completo</label>
                        <div class="col-lg-10">
                            <input id="nome_completo_usuario" name="nome_completo_usuario" class="form-control" maxlength="100">
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Email</label>
                        <div class="col-lg-10">
                            <input type="mail" id="email_curso" name="email_curso" class="form-control"
                                maxlength="200">
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" id="btn_save_usuario" class="btn btn-primary">
                            <i class="fa fa-save"></i> Salvar
                        </button>
                        <span class="help-block"></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Fim da Modal de Usuarios -->
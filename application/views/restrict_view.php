<section style="min-height: calc(100vh - 83px)" class="light-bg">

    <div class="container">
        <div class="row">
            <div class="col-lg-offset-3 col-lg-6 text-center">
                <div class="section-title">
                    <h2>ÁREA RESTRITA</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-offset-5 col-lg-2 text-center">
                <div class="form-group">
                    <a id="btn_your_user" class="btn btn-link"><i class="fa fa-user"></i></a>
                    <a class="btn btn-link" href="<?php echo base_url(); ?>restrict_controller/logoff">
                        <i class="fa fa-sign-out">
                            Sair
                        </i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#tab_projetos" role="tab" data-toggle="tab">Projetos</a></li>
            <li><a href="#tab_cursos" role="tab" data-toggle="tab">Cursos</a></li>
            <li><a href="#tab_usuarios" role="tab" data-toggle="tab">Usuários</a></li>
        </ul>

        <div class="tab-content">
            <div id="tab_projetos" class="tab-pane active">
                <div class="container-fluid">
                    <h2 class="text-center"><strong><i class="fa fa-pie-chart"> Gerenciar Projetos</i></strong></h2>
                    <a id="btn_add_projeto" class="btn btn-primary" data-toggle="modal" data-target="#modal_projetos"><i
                            class="fa fa-plus">&nbsp;&nbsp;Adicionar
                            Projeto</i></a>
                    <table id="dt_projetos" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th class="dt-center">Nome</th>
                                <th class="dt-center no-sort">Imagem</th>
                                <th class="dt-center">Duração</th>
                                <th class="no-sort">Descrição</th>
                                <th class="dt-center no-sort">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>

            <div id="tab_cursos" class="tab-pane">
                <div class="container-fluid">
                    <strong>
                        <h2 class="text-center">
                            <i class="fa fa-book" aria-hidden="true">
                                Gerenciar Cursos
                            </i>
                        </h2>
                    </strong>
                    <a id="btn_add_curso" class="btn btn-primary" data-toggle="modal" data-target="#modal_cursos"><i
                            class="fa fa-plus">&nbsp;&nbsp;Adicionar
                            Curso</i></a>
                    <table id="dt_cursos" class="table table-striped table-bordered">
                        <thead>
                            <tr class="tableheader">
                                <th>Nome</th>
                                <th>Foto</th>
                                <th>Descrição</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>

            <div id="tab_usuarios" class="tab-pane">
                <div class="container-fluid">
                    <h2 class="text-center"><strong><i class="fa fa-users"> Gerenciar Usuários</i></strong></h2>
                    <a id="btn_add_usuario" class="btn btn-primary" data-toggle="modal" data-target="#modal_usuarios"><i
                            class="fa fa-plus">&nbsp;&nbsp;Adicionar
                            Usuário</i></a>
                    <table id="dt_usuarios" class="table table-striped table-bordered">
                        <thead>
                            <tr class="tableheader">
                                <th>Login</th>
                                <th>Nome</th>
                                <th>E-mail</th>
                                <th class="dt-center no-sort">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Inicio da Modal de Projeto-->
<div id="modal_projetos" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <button type="button" class="close" data-dismiss="modal">X</button>
                <h4 class="text-center"><strong>Cadastrar Novo Projeto</strong></h4>
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
                        <button type="submit" id="btn_save_usuario" class="btn btn-primary">
                            <i class="fa fa-save">
                                Salvar
                            </i>
                        </button>

                        <button type="button" class="btn btn-danger" data-dismiss="modal">
                            Cancelar
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
            <div class="modal-header bg-primary">
                <button type="button" class="close" data-dismiss="modal">X</button>
                <h4 class="text-center"><strong>Cadastrar Novo Curso</strong></h4>
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
                            <input type="number" min="0" id="duracao_curso" name="duracao_curso" class="form-control">
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
                        <button type="submit" id="btn_save_usuario" class="btn btn-primary">
                            <i class="fa fa-save">
                                Salvar
                            </i>
                        </button>

                        <button type="button" class="btn btn-danger" data-dismiss="modal">
                            Cancelar
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
            <div class="modal-header bg-primary">
                <button type="button" class="close" data-dismiss="modal">X</button>
                <h4 class="text-center"><strong>Cadastrar Novo Usuário</strong></h4>
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
                            <input id="nome_completo_usuario" name="nome_completo_usuario" class="form-control"
                                maxlength="100">
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Email</label>
                        <div class="col-lg-10">
                            <input type="email" id="email_curso" name="email_curso" class="form-control"
                                maxlength="200">
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" id="btn_save_usuario" class="btn btn-primary">
                            <i class="fa fa-save">
                                Salvar
                            </i>
                        </button>

                        <button type="button" class="btn btn-danger" data-dismiss="modal">
                            Cancelar
                        </button>
                        <span class="help-block"></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Fim da Modal de Usuarios -->


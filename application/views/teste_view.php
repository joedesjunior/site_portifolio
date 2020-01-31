<html>
    <head>
        <title>CodeIgniter - Models</title>
    </head>
    <body>
        <h1>Lista de Usuários</h1>
        <?php foreach ($usuarios as $usuario) : ?>
            <p><strong>Codigo:</strong> <?php echo $usuario->codigo_usuario ?></p>
            <p><strong>Nome:</strong> <?php echo $usuario->nome_completo_usuario ?></p>
            <p><strong>Login:</strong> <?php echo $usuario->login_usuario ?></p>
            <p><strong>Ação:</strong><a href="<?= base_url() . 'teste_controller/excluir/' . $usuario->codigo_usuario?>"> Excluir Registro</a></p>
            <hr />
        <?php endforeach; ?>
    </body>
</html>
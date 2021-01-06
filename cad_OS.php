<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Easy Ticket - Logar com Cliente</title>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
        <link rel="stylesheet" href="assets/css/styles.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
        <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/Article-Clean.css">
        <link rel="stylesheet" href="assets/css/Features-Boxed.css">
        <link rel="stylesheet" href="assets/css/Footer-Dark.css">
        <link rel="stylesheet" href="assets/css/Navigation-Clean.css">



    </head>

    <body class="body">
        <nav class="navbar navbar-light navbar-expand-md navigation-clean bg-info">
            <div class="container"><a class="navbar-brand" href="#"><h5 style="color: seashell">Extreme Car &nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sistema Administrativo</h5></a>
                <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1">
                    <span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse"
                     id="navcol-1">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item" role="presentation"><a href="inicio.php"; class="nav-link"  style="color: antiquewhite;">Início</a></li>
                        <li class="nav-item dropdown"style="color: antiquewhite;" >
                            <a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#" style="color: antiquewhite;">Cadastro</a>
                            <div class="dropdown-menu bg-info" role="menu" onmouseover="color:Animation">
                                <a class="dropdown-item"; role="presentation"; href="cadastro_cliente.php"; style="color: antiquewhite;">Clientes</a>
                                <a class="dropdown-item" role="presentation" href="cad_os.php" style="color: antiquewhite;">Ordem de Serviço</a>
                                <a class="dropdown-item" role="presentation" href="form.html" style="color: antiquewhite;">Usuários</a>
                            </div>
                        <li class="nav-item dropdown"style="color: antiquewhite;" >
                            <a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#" style="color: antiquewhite;">Usuário</a>
                            <div class="dropdown-menu bg-info" role="menu">
                                <a class="dropdown-item"; role="presentation"; href="logout.php" style="color: antiquewhite;">Sair</a>
                                <a class="dropdown-item" role="presentation" href="login_adm.html" style="color: antiquewhite;">Trocar Usuário</a>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>



        <!--aqui inicia o formulário de login-->

        <div class="login-clean">
            <div class="titulo"><h5 >Cadastro de Ordem de Serviço</h5></div>
            <form method="post">
                <div class="form-group"><label class="label">Código</label><input style="max-width: 150px;" class="form-control" type="text" name="edCod" required readonly></div>
                <div class="form-group"><label class="label">Cliente</label><input class="form-control" type="text" name="edNome"  required></div>
                <div class="form-group"><label class="label">Manutentor</label><input class="form-control" type="text" name="edNome"  required></div>
                <div class="form-group"><label class="label">Descrição do Serviço</label><input  class="form-control" type="textarea" name="edTelefone" required></div>
                <div class="form-group"><label class="label">Data do Pedido</label><input  class="form-control" type="date" name="edEmail" required></div>
                <div class="form-group"><label class="label">Data e Hora de Início</label><input class="form-control" type="datetime" name="edEndereco"  required></div>
                <div class="form-group"><label class="label">Data e Hora de Fim</label><input class="form-control" type="datetime" name="edNumero"></div>
                <div class="form-group"><label class="label">Valor</label><input  class="form-control" type="text" name="edBairro"></div>


                <div class="form-group" ><button class="btn btn-primary btn-block" type="submit" >Cadastrar</button></div>
        </div>


        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    </body>

</html>
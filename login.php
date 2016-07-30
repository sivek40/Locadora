<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Locadora</title>

        <link href="css/bootstrap.css" rel="stylesheet"/>
        <link href="css/principal.css" rel="stylesheet"/>

        <script type="text/javascript" src="js/jquery-2.2.4.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/catalogo.js"></script>
    </head>
    <body>
        <div class="container" style="margin-top:30px">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3 class="panel-title"><strong>Entrar no sistema </strong></h3>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Esqueceu sua senha?</a></div>
                    </div>

                    <div class="panel-body">
                        <form role="form" action="/model/login.php" method="POST">
                            <div class="alert alert-danger">
                                <a class="close" data-dismiss="alert" href="#">×</a>Usuário ou senha incorreto!
                            </div>
                            <div style="margin-bottom: 12px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="usuário">                                        
                            </div>

                            <div style="margin-bottom: 12px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input id="login-password" type="password" class="form-control" name="password" placeholder="senha">
                            </div>

                            <div class="input-group">
                                <div class="checkbox" style="margin-top: 0px;">
                                    <label>
                                        <input id="login-remember" type="checkbox" name="remember" value="1"> Lembrar me
                                    </label>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success">Entrar</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

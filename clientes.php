<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Locadora</title>

        <link href="/css/bootstrap.css" rel="stylesheet"/>
        <link href="/css/principal.css" rel="stylesheet"/>
        <link href="/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" rel="stylesheet"/>

        <script type="text/javascript" src="/js/jquery-2.2.4.js"></script>
        <script type="text/javascript" src="/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="/bower_components/bootstrap-datepicker/dist/locales/bootstrap-datepicker.pt-BR.min.js"></script>
        <script type="text/javascript" src="/bower_components/jquery-mask-plugin/dist/jquery.mask.js"></script>
        <script type="text/javascript" src="/js/cliente.js"></script>
    </head>
    <body>

        <?php include 'menu.php'; ?>

        <div class="container">
            <form class="form-horizontal" id="form-clientes">
                <input type="hidden" name="id" id="id"/>
                <fieldset>

                    <!-- Form Name -->
                    <legend>Cadastro de Clientes</legend>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="nome">Nome</label>  
                        <div class="col-md-4">
                            <input id="nome" name="nome" type="text" placeholder="Nome" class="form-control input-md">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="email">Email</label>  
                        <div class="col-md-4">
                            <input id="email" name="email" type="text" placeholder="Email" class="form-control input-md">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="datanasc">Data nascimento</label>  
                        <div class="col-md-4" id="seletor-data">
                            <div class="input-group date">
                                <input type="text" class="form-control input-md" id="datanasc" name="datanasc" placeholder="Data nascimento">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                            </div>                    
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="telefone">Telefone</label>  
                        <div class="col-md-4">
                            <input id="telefone" name="telefone" type="text" placeholder="Telefone" class="form-control input-md">

                        </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="cadastrar"></label>
                        <div class="col-md-4">
                            <button id="cadastrar" name="cadastrar" class="btn btn-primary">Cadastrar</button>
                        </div>
                    </div>

                </fieldset>
            </form>

        </div>        

    </body>
</html>

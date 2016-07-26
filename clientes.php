<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Locadora</title>

        <link href="/css/bootstrap.css" rel="stylesheet"/>
        <link href="/css/principal.css" rel="stylesheet"/>

        <script type="text/javascript" src="/js/jquery-2.2.4.js"></script>
        <script type="text/javascript" src="/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/js/cadastro.js"></script>
    </head>
    <body>

        <?php include 'menu.php'; ?>

        <div class="container">
            <form class="form-horizontal">
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
                        <div class="col-md-4">
                            <input id="datanasc" name="datanasc" type="text" placeholder="Data nascimento" class="form-control input-md">

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

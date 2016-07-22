<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Locadora</title>

        <link href="css/bootstrap.css" rel="stylesheet"/>
        <link href="css/principal.css" rel="stylesheet"/>

        <script type="text/javascript" src="js/jquery-2.2.4.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/cadastro.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Locadora</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Catálogo</a></li>
                        <li class="active"><a href="cadastro.php">Cadastro de filmes</a></li>
                        <li><a href="#contact">Locação</a></li>
                        <li><a href="#contact">Clientes</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="#">Logout</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>

        <div class="container">
            <form class="form-horizontal" action="/model/cadastro.php" method="POST">
                <fieldset>

                    <!-- Form Name -->
                    <legend>Cadastro de Filme</legend>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="nome">Título do filme</label>  
                        <div class="col-md-4">
                            <input id="nome" name="nome" type="text" placeholder="Título do filme" class="form-control input-md" required="">

                        </div>
                    </div>

                    <!-- Textarea -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="sinopse">Sinopse</label>
                        <div class="col-md-4">                     
                            <textarea class="form-control" id="sinopse" name="sinopse"></textarea>
                        </div>
                    </div>

                    <!-- Select Multiple -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="categoria">Categoria do filme</label>
                        <div class="col-md-4">
                            <select id="categoria" name="categoria" class="form-control" multiple="multiple">
                                <option value="Ação">Ação</option>
                                <option value="Comédia">Comédia</option>
                                <option value="Romance">Romance</option>
                                <option value="Ficção">Ficção</option>
                                <option value="Terror">Terror</option>
                                <option value="Aventura">Aventura</option>
                                <option value="Infantil">Infantil</option>
                            </select>
                        </div>
                    </div>

                    <!-- Select Basic -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="ano">Ano de lançamento</label>
                        <div class="col-md-4">
                            <select id="ano" name="ano" class="form-control">
                            </select>
                        </div>
                    </div>

                    <!-- Multiple Radios -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="tipo">Tipo de cadastro</label>
                        <div class="col-md-4">
                            <div class="radio">
                                <label for="tipo-0">
                                    <input type="radio" name="tipo" id="tipo-0" value="Lançamento" checked="checked">
                                    Lançamento
                                </label>
                            </div>
                            <div class="radio">
                                <label for="tipo-1">
                                    <input type="radio" name="tipo" id="tipo-1" value="Catálogo">
                                    Catálogo
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="disponivel">Quantidade disponível</label>  
                        <div class="col-md-4">
                            <input id="disponivel" name="disponivel" type="text" placeholder="Quantidade disponível" class="form-control input-md" required="">

                        </div>
                    </div>

                    <!-- Select Basic -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="midia">Mídia do filme</label>
                        <div class="col-md-4">
                            <select id="midia" name="midia" class="form-control">
                                <option value="DVD">DVD</option>
                                <option value="BluRay">BluRay</option>
                                <option value="VHS">VHS</option>
                            </select>
                        </div>
                    </div>
                    <!-- Button -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="enviar"></label>
                        <div class="col-md-4">
                            <button id="enviar" name="enviar" class="btn btn-primary">Cadastrar</button>
                        </div>
                    </div>

                </fieldset>
            </form>

        </div>        

    </body>
</html>

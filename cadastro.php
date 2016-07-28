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
            <!-- <form class="form-horizontal" action="/model/cadastro.php" method="POST"> -->
            <form class="form-horizontal" id="form-cadastro">
                <input type="hidden" name="id" id="id"/>
                
                <fieldset>

                    <!-- Form Name -->
                    <legend>Cadastro de Filme</legend>
                    
                    <div class="row" id="alertas">
                    </div>
                    
                    <!-- Text input-->
                    <div class="form-group has-feedback">
                        <label class="col-md-4 control-label" for="nome">Título do filme</label>  
                        <div class="col-md-4">
                            <input id="nome" name="nome" type="text" placeholder="Título do filme" class="form-control input-md">
                        </div>
                    </div>

                    <!-- Textarea -->
                    <div class="form-group has-feedback">
                        <label class="col-md-4 control-label" for="sinopse">Sinopse</label>
                        <div class="col-md-4">                     
                            <textarea class="form-control" id="sinopse" name="sinopse"></textarea>
                        </div>
                    </div>

                    <!-- Select Multiple -->
                    <div class="form-group has-feedback">
                        <label class="col-md-4 control-label" for="categoria">Categoria do filme</label>
                        <div class="col-md-4">
                            <select id="categoria" name="categoria[]" class="form-control" multiple="multiple">
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
                    <div class="form-group has-feedback">
                        <label class="col-md-4 control-label" for="ano">Ano de lançamento</label>
                        <div class="col-md-4">
                            <select id="ano" name="ano" class="form-control">
                            </select>
                        </div>
                    </div>

                    <!-- Multiple Radios -->
                    <div class="form-group has-feedback">
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
                    <div class="form-group has-feedback">
                        <label class="col-md-4 control-label" for="disponivel">Quantidade disponível</label>  
                        <div class="col-md-4">
                            <input id="disponivel" name="disponivel" type="text" placeholder="Quantidade disponível" class="form-control input-md quant">
                        </div>
                    </div>

                    <!-- Select Basic -->
                    <div class="form-group has-feedback">
                        <label class="col-md-4 control-label" for="midia">Mídia do filme</label>
                        <div class="col-md-4">
                            <select id="midia" name="midia" class="form-control">
                                <option value="">-- Selecione --</option>
                                <option value="DVD">DVD</option>
                                <option value="BluRay">BluRay</option>
                                <option value="VHS">VHS</option>
                            </select>
                        </div>
                    </div>
                    
                    <!-- File Button --> 
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="capa">Capa do Filme</label>
                        <div class="col-md-4">
                            <input id="capa" name="capa" class="input-file" type="file">
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

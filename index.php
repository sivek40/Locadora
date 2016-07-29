<?php
    if(!isset($_COOKIE['locadora'])) {
        header('Location: /login.php');
    };
?>
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

        <?php include 'menu.php'; ?>
        
        <div class="container">
            <div class="row">

                <section class="content">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="col-md-3">
                                    <input type="text" id="filtro-nome" class="form-control" placeholder="Nome do filme">
                                </div>
                                <div class="pull-right">
                                    <div class="btn-group" id="filtro">
                                        <button type="button" class="btn btn-success btn-filter" data-target="lancamentos">Lançamentos</button>
                                        <button type="button" class="btn btn-warning btn-filter" data-target="catalogos">Catálogos</button>
                                        <button type="button" class="btn btn-danger btn-filter" data-target="disponiveis">Disponíveis</button>
                                        <button type="button" class="btn btn-primary btn-filter active" data-target="all">Todos</button>
                                    </div>
                                </div>
                                <div class="col-md-3 pull-right">
                                    <select id="filtro-categoria" class="form-control">
                                        <option value="">--Categoria--</option>
                                        <option value="Ação">Ação</option>
                                        <option value="Comédia">Comédia</option>
                                        <option value="Romance">Romance</option>
                                        <option value="Ficção">Ficção</option>
                                        <option value="Terror">Terror</option>
                                        <option value="Aventura">Aventura</option>
                                        <option value="Infantil">Infantil</option>
                                    </select>
                                </div>
                                <div class="table-container">
                                    <table id="catalogo" class="table table-filter">
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="content-footer">
                            <p>
                                Page © - 2016 <br>
                                Feito por Sivek na Elaborata &#9786;
                            </p>
                        </div>
                    </div>
                </section>

            </div>
        </div>        

        <table id="tbl-autocomplete">
            
        </table>
    </body>
</html>

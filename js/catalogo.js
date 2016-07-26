$(document).ready(function(){
    $.getJSON('/model/catalogo.php', function(data){

        $(data).each(function(idx, elem){
            
            var lancamento = (elem.tipo == "catalogo")? 'glyphicon glyphicon-star-empty' : 'glyphicon glyphicon-star';
            
            var filme = $('<tr data-status="pagado">'
                +'<td>'
                    +'<div class="ckbox">'
                        +'<input type="checkbox" id="checkbox1">'
                        +'<label for="checkbox1"></label>'
                    +'</div>'
                +'</td>'
                +'<td>'
                    +'<a class="star">'
                        +'<i class="'+lancamento+'"></i>'
                    +'</a>'
                +'</td>'
                +'<td>'
                    +'<div class="media">'
                        +'<a href="#" class="pull-left">'
                            +'<img src="https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg" class="media-photo">'
                        +'</a>'
                        +'<div class="media-body">'
                            +'<span class="media-meta pull-right">'+elem.ano+'</span>'
                            +'<h4 class="title">'
                                + '<a href="/cadastro.php?id='+elem.id+'">'+elem.nome+'</a>'
                                +'<span class="pull-right pagado">'+elem.categoria+'</span>'
                            +'</h4>'
                            +'<p class="summary">'+elem.sinopse+'</p>'
                        +'</div>'
                    +'</div>'
                +'</td>'
            +'</tr>');
            $(filme).appendTo('#catalogo tbody');
        })
    })
});
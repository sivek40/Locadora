$(document).ready(function() {

    var id = getId();

    if (id != null) {
        $.getJSON('/model/cadastro.php', {id: id}).done(function(retorno) {
            $('#id').val(retorno.id);
            $('#nome').val(retorno.nome);
            $('#sinopse').val(retorno.sinopse);
            $('#categoria').val(retorno.categoria.split(','));
            $('#ano').val(retorno.ano);
            $('input[name="tipo"]').each(function(idx, elem) {
                if ($(elem).val() == retorno.tipo) {
                    $(elem).prop("checked", true);
                }
            });
            $('#disponivel').val(retorno.disponivel);
            $('#midia').val(retorno.midia);
        })
    }

    var ano = new Date().getFullYear();
    var listaAno = $('<option value="">-- Selecione --</option>');
    $(listaAno).appendTo('#ano');
    for (var i = 1950; i <= ano; i++) {
        listaAno = $('<option value="' + i + '">' + i + '</option>');
        $(listaAno).appendTo('#ano');
    }

    $('.quant').keydown(function(evento) {
        if (evento.keyCode == 08)
            return true; //back space
        if (evento.keyCode == 37)
            return true; //seta esquerda
        if (evento.keyCode == 39)
            return true; //seta direita
        if (evento.keyCode == 35)
            return true; //end
        if (evento.keyCode == 36)
            return true; //home
        if (evento.keyCode == 46)
            return true; //del
        if (evento.keyCode == 190 || evento.keyCode == 110)
            return true; //(.) ponto
        if (evento.keyCode == 188 || evento.keyCode == 108)
            return true; //(,) virgula

        if ((evento.keyCode >= 48 && evento.keyCode <= 57) || (evento.keyCode >= 96 && evento.keyCode <= 105)) {
            return true;
        } else {
            return false;
        }
    });

    $('#form-cadastro').submit(function(evento) {
        evento.preventDefault();

        if (!validaForm(this)) {
            return false;
        }

        var dados = $(this).serialize();

        $.post('/model/cadastro.php', dados).done(function(retorno) {

            var retorno = JSON.parse(retorno);

            $('#alertas').empty();

            if (retorno.status == 'ok') {
                $('input, select, textarea').val('');
                $('#form-cadastro div.form-group:first').find('input, select, textarea').focus();
                if ($('input id').val() == '') {
                    var incAlt = "adicionado";
                } else {
                    var incAlt = "atualizado";
                }
                var alerta = $('<div class="alert alert-success alert-dismissible col-md-8 col-md-offset-2" role="alert">'
                        + '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'
                        + '<span aria-hidden="true">&times;</span></button>'
                        + '<strong><i class="glyphicon glyphicon-ok"></i> Sucesso!</strong> O filme foi '+incAlt+' corretamente.'
                        + '</div>');
            } else {
                var alerta = $('<div class="alert alert-danger alert-dismissible col-md-8 col-md-offset-2" role="alert">'
                        + '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'
                        + '<span aria-hidden="true">&times;</span></button>'
                        + '<strong><i class="glyphicon glyphicon-remove-sign"></i> Erro!</strong> O filme não foi '+incAlt+'.'
                        + '</div>');
            }
            $('#alertas').append(alerta);
        });
    });
});

function validaForm(form) {

    $(form).find('.form-group').removeClass('has-error');
    $(form).find('span.glyphicon-remove').remove();

    var valido = true;

    $(form).find('input, select, textarea').each(function(idx, elem) {
        if ($(elem).val() == '') {
            valido = false;
            $(elem).parent().parent().addClass('has-error');
            if ($(elem).attr('type') == 'text') {
                $(elem).after('<span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>');
            }
        }
    });

    return valido;
}

function getId() {

    var uri = window.location.search.substr(1);
    return uri.split('=')[1];
}
$(document).ready(function() {
    $('#seletor-data .input-group.date').datepicker({
        format: "dd/mm/yyyy",
        weekStart: 0,
        endDate: "today",
        todayBtn: "linked",
        language: "pt-BR",
        autoclose: true,
        todayHighlight: true
    });
    
    $('#telefone').mask('(00)90000-0000');
    
    $('#form-clientes').submit(function(evento) {
        evento.preventDefault();

        if (!validaForm(this)) {
            return false;
        }

        var dados = $(this).serialize();

        $.post('/model/clientes.php', dados).done(function(retorno) {

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

    $(form).find('input[type="text"]').each(function(idx, elem) {
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

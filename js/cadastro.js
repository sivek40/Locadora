$(document).ready(function(){
    var ano = new Date().getFullYear();
    var listaAno = $('<option value="">-- Selecione --</option>');
    $(listaAno).appendTo('#ano');
    for (var i = 1950; i <= ano; i++){
        listaAno = $('<option value="'+i+'">'+i+'</option>');
        $(listaAno).appendTo('#ano');
    }
    $('#form-cadastro').submit(function(evento){
        evento.preventDefault();
        
        validaForm(this);
        return;
        
        var dados = $(this).serialize();
        
        $.post('/model/cadastro.php', dados).done(function(retorno){
            
            var retorno = JSON.parse(retorno);
            
            $('#alertas').empty();
            
            if (retorno.status == 'ok') {
                $('input, select, textarea').val('');
                $('#form-cadastro div.form-group:first').find('input, select, textarea').focus();
                var alerta = $('<div class="alert alert-success alert-dismissible col-md-8 col-md-offset-2" role="alert">'
                              +'<button type="button" class="close" data-dismiss="alert" aria-label="Close">'
                                  +'<span aria-hidden="true">&times;</span></button>'
                                +'<strong><i class="glyphicon glyphicon-ok"></i> Sucesso!</strong> O filme foi adicionado corretamente.'
                            +'</div>');
            } else {
                var alerta = $('<div class="alert alert-danger alert-dismissible col-md-8 col-md-offset-2" role="alert">'
                              +'<button type="button" class="close" data-dismiss="alert" aria-label="Close">'
                                  +'<span aria-hidden="true">&times;</span></button>'
                              +'<strong><i class="glyphicon glyphicon-remove-sign"></i> Erro!</strong> O filme não foi adicionado.'
                            +'</div>');
            }
            $('#alertas').append(alerta);
        });
    });
});

function validaForm(form){
    
    $(form).find('.form-group').removeClass('has-error');
    $(form).find('span.glyphicon-remove');
    
    var valido = true;
    
    $(form).find('input, select, textarea').each(function(idx, elem){
        if ($(elem).val() == '') {
            valido = false;
            $(elem).parent().parent().addClass('has-error');
        }
        if ($(elem).attr('type') == 'text') {
            $(elem).after('<span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>');
        }
    });
    
    return valido;
}
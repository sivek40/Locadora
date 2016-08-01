$(document).ready(function() {

    $('#form-login').submit(function(evento) {
        evento.preventDefault();
        
        $(this).find('input[type="text"], input[type="password"]').each(function(i, el) {
            $(el).parent().removeClass('has-error');
            if ($(el).val().trim() == '') {
                $(el).parent().addClass('has-error');
            }
        });
        
        var dados = $(this).serialize();
        
        $.post('/model/login.php', dados, function(retorno) {
            var obj = JSON.parse(retorno);
            if (obj.status != 'ok') {
                $('#alert-erro').html(obj.msg);
                $('#alert-erro').fadeIn();
            } else {
                
                window.location = '/index.php';
            }
        });
    });
    
});

$(document).ready(function() {
    var usuario = document.cookie.split('=');
    usuario = decodeURIComponent(usuario[1]);
    usuario = JSON.parse(usuario);
      
    $('#usuario').html(usuario.nome.replace('+',' ') + ' (Logout)');
    
    $('#usuario').click(function(e){
        e.preventDefault();
        var data = new Date();
        data.setHours(-2);
        document.cookie = 'locadora=off; expires='+data.toUTCString()+';path=/';
        window.location = '/login.php';
    });
});

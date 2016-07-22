$(document).ready(function(){
    var ano = new Date().getFullYear();
    for (var i = 1950; i <= ano; i++){
        var listaAno = $('<option value="'+i+'">'+i+'</option>');
        $(listaAno).appendTo('#ano');
    }
});

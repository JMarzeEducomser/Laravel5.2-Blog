// Paginación
$(document).on('click', '.pagination a', function(e){
    e.preventDefault();
    var href = $(this).attr('href').split('?');
    var url = href[0]; // http://localhost:8000/admin/tag
    var data = href[1]; // page=2
    $.ajax({
        url: url,
        method: 'GET',
        dataType: 'JSON',
        data: data
    }).done(function (response){
        $('.content-ajax').html(response);
    });
});

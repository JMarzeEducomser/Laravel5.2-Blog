// Store
var formCreate = $('#form-create');
$(document).on('click', '#btn-agregar', function(){
    var url = formCreate.attr('action');
    var data = formCreate.serialize();
    $.ajax({
        url: url,
        method: 'POST',
        dataType: 'JSON',
        data: data
    }).done(function (response){
        window.location.href = "{{ route('admin.tag.index') }}";
    }).fail(function (response){
        if(response.responseJSON['nombre']){
            $(".wrapper-nombre").addClass('has-error');
            $(".wrapper-nombre .help-block>strong").html(response.responseJSON['nombre']);
        }else{
            $(".wrapper-nombre").removeClass('has-error');
            $(".wrapper-nombre .help-block>strong").html('');
        }
    });
});
// Reset Form
$('.modal#create').on('show.bs.modal', function(e){
    $(this).find('form')[0].reset();
    $('.help-block>strong').html('');
    $('.has-error').removeClass('has-error');
});
$('.modal#create').on('hidden.bs.modal', function(e){
    $(this).find('form')[0].reset();
    $('.help-block>strong').html('');
    $('.has-error').removeClass('has-error');
});

<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="Agregar">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="Agregar">
                    <i class="fa fa-btn fa-plus"></i>Agregar Tag
                </h4>
            </div>

            <div class="modal-body">
                {!! Form::open(['route' => 'admin.tag.store', 'method' => 'POST', 'id' => 'form-create', 'class' => 'form-horizontal']) !!}

                @include('tag.partial.form')

                {!! Form::close() !!}
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">
                    <i class="fa fa-btn fa-close"></i>Cancelar
                </button>
                <button type="button" class="btn btn-default" id="btn-agregar">
                    <i class="fa fa-btn fa-save"></i>Agregar
                </button>
            </div>

        </div>
    </div>
</div>

@section('script')
@parent
<script>
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
</script>
@endsection







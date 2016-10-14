<table class="table table-hover">
    <tr class="table-header">
        <th>Id</th>
        <th>Nombre</th>
        <th></th>
    </tr>
    @foreach($tags as $tag)
    <tr class="table-body">
        <td>{{ $tag->id }}</td>
        <td>{{ $tag->nombre }}</td>
        <td></td>
    </tr>
    @endforeach
</table>

{{ $tags->render() }}

@section('script')
@parent
<script>
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
</script>
@endsection

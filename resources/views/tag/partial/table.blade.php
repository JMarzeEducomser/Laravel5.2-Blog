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


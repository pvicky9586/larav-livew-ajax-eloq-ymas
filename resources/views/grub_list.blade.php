 <h2>Listado de Post</h2>
  <table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th class="text-center">Title</th>
            <th class="text-center">Body</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td class="text-center">{{ $post->body }}</td>
                <td class="btn btn-primary"> <a href="">Editar</a></td>
                <td class="btn btn-danger">Eliminar</td>
            </tr>
        @endforeach
    </tbody>
</table>
{{ $posts->links() }}
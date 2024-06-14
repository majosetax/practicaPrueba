<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Index Post</h1>
    <table >
        <tr>
            <th>Id</th>
            <th>Titulo</th>
            <th>Body</th>
            <th>User_id</th>
            <th>Created_At</th>
            <th>Updated_At</th>
            <th>Mostrar</th>
        <th>Editar</th>
        <th>Eliminar</th>
        </tr>
        @foreach ($posts as $post)
        <tr>
        <td>{{$post->id}}</td>
        <td>{{$post->title}}</td>
        <td>{{$post->body}}</td>
        <td>{{$post->user_id}}</td>
        <td>{{$post->created_at}}</td>
        <td>{{$post->updated_at}}</td>
        <td><form action="{{route('post.show',$post->id)}}" method="GET">
        @csrf
        <button type="submit"> Ver mas...</button>
        </form></td>
        <td><form action="{{route('post.edit',$post->id)}}" method="GET">
            @csrf
            <button type="submit"> Editar</button>
            </form></td>
            <td><form action="{{route('post.destroy',$post->id)}}" method="post">
                @csrf
                @method('delete')
                <button type="submit">Eliminar</button>
                </form></td>
            </tr>
        @endforeach
    </table>
    <br>
    <form action="{{route('post.create')}}" method="GET">
        @csrf
        <button type="submit"> Crear nuevo registro</button>
        </form>
</body>
</html>

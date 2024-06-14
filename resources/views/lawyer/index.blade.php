<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Index Lawyer</h1>
    <table >
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Direccion</th>
            <th>Celular</th>
            <th>Created_At</th>
            <th>Updated_At</th>
            <th>Mostrar</th>
        <th>Editar</th>
        <th>Eliminar</th>
        </tr>
        @foreach ($lawyers as $lawyer)
        <tr>
        <td>{{$lawyer->id}}</td>
        <td>{{$lawyer->name}}</td>
        <td>{{$lawyer->address}}</td>
        <td>{{$lawyer->cell_phone}}</td>
        <td>{{$lawyer->created_at}}</td>
        <td>{{$lawyer->updated_at}}</td>
        <td><form action="{{route('lawyer.show',$lawyer->id)}}" method="GET">
        @csrf
        <button type="submit"> Ver mas...</button>
        </form></td>
        <td><form action="{{route('lawyer.edit',$lawyer->id)}}" method="GET">
            @csrf
            <button type="submit"> Editar</button>
            </form></td>
            <td><form action="{{route('lawyer.destroy',$lawyer->id)}}" method="post">
                @csrf
                @method('delete')
                <button type="submit">Eliminar</button>
                </form></td>
            </tr>
        @endforeach
    </table>
    <br>
    <form action="{{route('lawyer.create')}}" method="GET">
        @csrf
        <button type="submit"> Crear nuevo registro</button>
        </form>
</body>
</html>

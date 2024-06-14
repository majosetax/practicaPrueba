<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Index Customer</h1>
    <table>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
            <th>Created_At</th>
            <th>Updated_At</th>
            <th>Mostrar</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
        @foreach ($customers as $customer)
        <tr>
            <td>{{$customer->id}}</td>
            <td>{{$customer->name}}</td>
            <td>{{$customer->last_name}}</td>
            <td>{{$customer->age}}</td>
            <td>{{$customer->created_at}}</td>
            <td>{{$customer->updated_at}}</td>
            <td><form action="{{route('customer.show',$customer->id)}}" method="GET">
            @csrf
            <button type="submit">Ver mas...</button>
            </form></td>
            <td><form action="{{route('customer.edit',$customer->id)}}" method="get">
                @csrf
                <button type="submit">Editar</button>
                </form></td>
                <td><form action="{{route('customer.destroy',$customer->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit">Eliminar</button>
                    </form></td>
        </tr>
        @endforeach
    </table>
    <br>
    <form action="{{route('customer.create')}}" method="GET">
        @csrf
        <button type="submit">Crear registros nuevos</button>
        </form>
</body>
</html>

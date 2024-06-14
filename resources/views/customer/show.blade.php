<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Show Customer</h1>
    <table>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
            <th>Created_At</th>
            <th>Updated_At</th>
        </tr>
        <tr>
            <td>{{$customer->id}}</td>
            <td>{{$customer->name}}</td>
            <td>{{$customer->last_name}}</td>
            <td>{{$customer->age}}</td>
            <td>{{$customer->created_at}}</td>
            <td>{{$customer->updated_at}}</td>
        </tr>
    </table>
    <br>
    <form action="{{route('customer.index')}}" method="GET">
        @csrf
        <button type="submit">Volver al index</button>
        </form>
</body>
</html>

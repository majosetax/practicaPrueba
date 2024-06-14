<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Show lawyer {{$lawyer->id}}</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Direccion</th>
        <th>Celular</th>
        <th>Created_At</th>
        <th>Updated_At</th>
    </tr>
    <tr>
        <td>{{$lawyer->id}}</td>
        <td>{{$lawyer->name}}</td>
        <td>{{$lawyer->address}}</td>
        <td>{{$lawyer->cell_phone}}</td>
        <td>{{$lawyer->created_at}}</td>
        <td>{{$lawyer->updated_at}}</td>
    </tr>
</table>
</body>
</html>

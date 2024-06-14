<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Editar registro</h1>

    <form action="{{route('lawyer.update',$lawyer->id)}}" method="POST">
        @csrf
        @method('put')

        <label for="name"></label>
        <input type="text" name="name" value="{{old('Name:',$lawyer->name)}}">
        <br>
        <label for="address"></label>
        <input type="text" name="address" value="{{old('Address:',$lawyer->address)}}">
        <br>
        <label for="cell_phone"></label>
        <input type="text" name="cell_phone" value="{{old('Cell Phone:',$lawyer->cell_phone)}}">
        <br>
    <button type="submit">Editar</button>

    </form>
</body>
</html>

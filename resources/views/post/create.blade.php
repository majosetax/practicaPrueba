<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Crear registro aleatorio</h1>
    <form action="{{route('post.store')}}" method="POST">
        @csrf

        <button type="submit">Crear Registro Aleatorio</button>
    </form>
</body>
</html>

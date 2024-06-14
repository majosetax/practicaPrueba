<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Editar registro</h1>

    <form action="{{route('post.update',$post->id)}}" method="POST">
        @csrf
        @method('put')

        <label for="title"></label>
        <input type="text" name="title" value="{{old('Title:',$post->title)}}">
        <br>
        <label for="body"></label>
        <input type="text" name="body" value="{{old('body:',$post->body)}}">
        <br>
        <label for="user_id"></label>
        <input type="number" name="user_id" value="{{old('User id:',$post->user_id)}}">
        <br>
    <button type="submit">Editar</button>

    </form>
</body>
</html>

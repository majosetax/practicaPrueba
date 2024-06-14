<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Show post {{$post->id}}</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Titulo</th>
        <th>Body</th>
        <th>User_id</th>
        <th>Created_At</th>
        <th>Updated_At</th>
    </tr>
    <tr>
        <td>{{$post->id}}</td>
        <td>{{$post->title}}</td>
        <td>{{$post->body}}</td>
        <td>{{$post->user_id}}</td>
        <td>{{$post->created_at}}</td>
        <td>{{$post->updated_at}}</td>
    </tr>
</table>
</body>
</html>

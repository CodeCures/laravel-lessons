<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('users.update', ['user' => $user->id]) }}" method="POST">
        @method('PUT')
        @csrf
        <input type="text" value="{{ $user->name }}" name="name"><br>
        <input type="email" value="{{ $user->email }}" name="email"><br>
        <input type="submit" value="update">
    </form>
</body>
</html>
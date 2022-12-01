<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        @csrf
        <input type="text" name="title">
        <input type="text" name="desc">
        <textarea name="text"></textarea>
        <input type="date" name="date">
        <input type="submit" name="">
    </form>
    @if(isset($data))
        {{ print_r($data) }}
    @endif
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>orn</title>
</head>
<body>
    <form action="{{Route('snc')}}" method="post">
        @csrf
        <textarea name="mtn"></textarea><br>
        <input type="submit" name="ilt" value="Gönder">
    </form>
</body>
</html>
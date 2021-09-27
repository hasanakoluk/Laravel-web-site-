<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dosya yükle</title>
</head>
<body>
    <form action="{{route('getir')}}" method="post" enctype="multipart/form-data">
     @csrf
     <strong class="Sec">Dosya seç</strong><br>
     <input type="file" name="yukle"><br>
     <input type="submit" value="Dosya yükle">
    </form>
</body>
</html>
<style>
    .Sec{
        font-size: 15px;
        color:red;
        border-color: blue;
    }
</style>
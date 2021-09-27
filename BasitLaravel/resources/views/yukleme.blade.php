<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>yukleme işlemi</title>
</head>
<body>
     <form action="{{route('yukle-getir')}}" method="post" enctype="multipart/form-data">
     @csrf
             <label>Dosya Seçiniz</label><br>
            <input type="file" name="dosya"><br>
            <input type="submit" value="Dosya Yükle">

     </form>
</body>
</html>
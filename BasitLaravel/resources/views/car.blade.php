<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim Formu</title>
</head>
<body>
    <form action="{{Route('carr-sonuc')}}" method="post">
 @csrf
        <label>Marka</label>
        <input type="text" name="marka"><br>
        <label>Model</label>
        <input type="text" name="model"><br>
        <label>Tip</label>
        <input type="text" name="tip"><br>
        <label>Açıklama</label>
       <textarea name="aciklama"></textarea><br>
      <input type="submit" name="ilet" value="Gönder">

    </form>
</body>
</html>
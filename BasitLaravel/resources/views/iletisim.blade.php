<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim Formu</title>
</head>
<body>
    <form action="{{Route('iletisim-sonuc')}}" method="post">
 @csrf
        <label>Ad Soyad</label>
        <input type="text" name="adsoyad"><br>
        <label>Telefon</label>
        <input type="text" name="telefon"><br>
        <label>E-Mail</label>
        <input type="text" name="mail"><br>
       <textarea name="metin"></textarea><br>
      <input type="submit" name="ilet" value="Gönder">

    </form>
</body>
</html>
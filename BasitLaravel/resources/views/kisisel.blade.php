<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kişisel Form Sayfası</title>
</head>
<body>
    <form action="{{Route('kisisel-sonuc')}}" method="post">
 @csrf
 <label>Ad Soyad</label>
        <input type="text" name="adsoyad"><br>
        <label>tc</label>
        <input type="text" name="tc"><br>
        <label>il</label>
        <input type="text" name="il"><br>
        <label>ilce</label>
        <input type="text" name="ilce"><br>
       <textarea name="metin"></textarea><br>
      <input type="submit" name="ilet" value="Gönder">

    </form>
</body>
</html>
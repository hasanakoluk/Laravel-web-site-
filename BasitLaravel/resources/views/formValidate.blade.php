<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ornek validate</title>
</head>
<body>
@if($errors->any())
    @foreach($errors->all() as $hatalar)
    {{$hatalar}}
    @endforeach
    @endif
    <form action="{{Route('pSonuc')}}" method="post">
        @csrf
        <label>AdSoyad</label>
       <input type="text" name="adsoyad"><br>
       <label>Şifre</label>
       <input type="password" name="sifre"><br>
        <input type="submit" name="giris" value="Giriş Yap">
    </form>
</body>
</html>
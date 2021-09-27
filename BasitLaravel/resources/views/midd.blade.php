<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>midd Formu</title>
</head>
<body>
    <form action="{{route('sonuc')}}" method="post">
 @csrf
       
        <label>Kelime</label>
       <textarea name="ara"></textarea><br>
      <input type="submit"  value="Gönder">

    </form>
</body>
</html>
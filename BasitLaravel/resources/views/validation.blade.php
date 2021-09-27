<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ornVal</title>
</head>
<body>
    <ul>
          @if($errors->any())
          <li>
          @foreach($errors->all() as $hataBas)
          {{$hataBas}}
          @endforeach
          </li>
          @endif
    </ul>
    <form action="{{Route('valSonuc')}}" method="post">
        @csrf
        <label>Marka</label>
        <input type="text" name="marka"><br>
        <label>Tip</label>
        <input type="text" name="tip"><br>
        <label>E-mail</label>
        <input type="email" name="mail"><br>
        <input type="submit"  value="Gönder">
    </form>
</body>
</html>
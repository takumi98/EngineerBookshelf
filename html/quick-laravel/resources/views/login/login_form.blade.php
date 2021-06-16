<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ログインフォーム</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <script src="{{ asset('js/app.js')}}" defer></script>
  <link href="{{ asset('css/signin.css')}}" rel="stylesheet">

</head>
<body class="text-center">
  <form class="form-signin" method="POST" action="{{ route('login')}}">
  @csrf
    <h1 class="h3 mb-3 font-weight-normal">ログイン</h1>
    <label for="inputEmail" class="sr-only">メールアドレス</label>
    <input type="email" id="inputEmail" name="email" class="form-control" placeholder="メールアドレス" required autofocus>
    <label for="inputPassword" class="sr-only">パスワード</label>
    <input type="password" id="inputPassword" name="password" class="form-control" placeholder="パスワード" required>
    <button class="btn btn-lg btn-primary btn-block" type="submit">ログイン</button>
  </form>
</body>
</html>

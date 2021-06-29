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
  <link href="{{ asset('css/entry_books.css')}}" rel="stylesheet">

<body>
  <div class="container">
    <h1>登録技術書一覧</h1>
  <table class="table table-bordered">
  <thead>
    <tr>
      <th style="width: 20%">表紙</th>
      <th style="width: 20%">書籍名</th>
      <th style="width: 20%">出版社</th>
      <th style="width: 20%">発売日</th>
      <th style="width: 20%">操作</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($books as $eb)
    <tr>
      <td>{{ $eb->image_file_name}}</td>
      <td>{{ $eb->name}}</td>
      <td>{{ $eb->publisher}}</td>
      <td>{{ $eb->release_date}}</td>
      <td>
        <div class="btn-group-vertical">
          <button>編集</button>
          <button>削除</button>
        </div>
      </td>
    </tr>
    @endforeach
  </tbody>
  </table>
  {{ $books->links()}}
  </div>
</body>
</html>

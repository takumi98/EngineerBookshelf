<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TestPage</title>
</head>
<body>
  <div class="continer">
  <h1>ポスト作成</h1>

@foreach ($book as $b)
<tr>
　<td>{{ optional($b->evaluation)->post_id }}</td>
</tr>
@endforeach
  </div>
</body>
</html>

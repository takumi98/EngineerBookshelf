<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="widtd=device-widtd, initial-scale=1.0" />
		<title>ログインフォーム</title>
		<link
			rel="stylesheet"
			href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
			integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
			crossorigin="anonymous"
		/>
		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
			crossorigin="anonymous"
		></script>
		<script src="{{ asset('js/app.js')}}" defer></script>
		<link href="{{ asset('css/search.css')}}" rel="stylesheet" />
	</head>
<body>
  
<body>
  <div class="container mt-3">
		<div class="search_result">
			検索結果（{{ $book_count }}件）
		</div>
		<table class="table table-bordered">
		<thead>
			<tr>
				<th style="width: 15%">表紙</th>
				<th style="width: 15%">書籍名</th>
				<th style="width: 15%">出版社</th>
				<th style="width: 15%">発売日</th>
				<th style="width: 15%">価格</th>
				<th style="width: 15%">投稿者評価</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($books as $eb)
			<tr>
				<td>{{ $eb->image_file_name}}</td>
				<td>{{ $eb->name}}</td>
				<td>{{ $eb->publisher}}</td>
				<td>{{ $eb->release_date}}</td>
				<td>{{ $eb->price}}</td>
				<td>{{ $eb->evaluation_id}}</td>
			</tr>
			@endforeach
		</tbody>
		</table>
		{{ $books->links()}}
  </div>
</body>
</body>
</html>

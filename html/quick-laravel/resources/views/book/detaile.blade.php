<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
		<link href="{{ asset('css/detaile.css')}}" rel="stylesheet" />
	</head>
	<body>
		<div class="container">
			<div class="bookdetail row mt-5">
				<div class="img col-4">本画像</div>
				<div class="book col-8">本体</div>
			</div>
		</div>
    <div class="container">
      <div class="detailtext row">
				<div class="title col-1">
					<h2>詳細</h1>
				</div>
				<div class="textcontainer col-10 m-3">
					詳細テキスト
				</div>
			</div>
    </div>
    <div class="container">
      <div class="comment row">
				<div class="title col-1">
					<h2>コメント</h1>
				</div>
				<div class="textcontainer col-10 m-3">
					詳細テキスト
				</div>
			</div>
    </div>
	</body>
</html>

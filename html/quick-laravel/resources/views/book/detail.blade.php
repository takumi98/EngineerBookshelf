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
		<link href="{{ asset('css/detaile.css')}}" rel="stylesheet" />
	</head>

	<body>
		<header>
			@include('header')
		</header>
	<div class="container my-3 border">
		<h2>技術書詳細</h2>
		<div class="container">
			<div class="bookdetail row mt-5 border">
				<div class="img col-4">{{ $bookdata->image_file_name }}</div>
				<div class="book col-8 border">
					<!-- 本詳細画面 -->
					<div class="row mt-3">
						<div class="head col-md-3 offset-1">
							タイトル
						</div>
						<div class="col-7">
							{{ $bookdata->name }}
						</div>
					</div>
					<div class="row mt-3">
						<div class="head col-md-3 offset-1">
							出版社
						</div>
						<div class="col-7">
							{{ $bookdata->publisher }}
						</div>
					</div>
					<div class="row mt-3">
						<div class="head col-md-3 offset-1">
							発売日
						</div>
						<div class="col-7">
							{{ $bookdata->release_date }}
						</div>
					</div>
					<div class="row mt-3">
						<div class="head col-md-3 offset-1">
							価格
						</div>
						<div class="col-7">
							¥{{ $bookdata->price }}
						</div>
					</div>
					<div class="row mt-3">
						<div class="head col-md-3 offset-1">
							評価
						</div>
						<div class="col-7">
							{{ $Rdata[1] }}
						</div>
					</div>
					<div class="row mt-3">
						<div class="head col-md-3 offset-1">
							カテゴリー
						</div>
						<div class="col-7">
							{{ $Rdata[0] }}
						</div>
					</div>
					<div class="row my-3">
						<div class="head col-md-3 offset-1">
							投稿者
						</div>
						<div class="col-7">
							{{ $Rdata[2] }}
						</div>
					</div>
				</div>
			</div>
		</div>
    <div class="container">
      <div class="detailtext row border">
				<div class="title col-1">
					<h2>詳細</h1>
				</div>
				<div class="textcontainer col-10 m-3 p-3 border">
					{{ $bookdata->content }}
				</div>
			</div>
    </div>
    <div class="container">
      <div class="comment row pt-3 border">
				<div class="title col-12">
					<h2>コメント</h1>
				</div>
				<div class="textcontainer col-12 m-3">
					<ul>
					@if(!isset( $comments ))
						<p>コメントなし</p>
					@else
						@foreach ($comments as $comment)
						<li>{{ $comment->user->name}}さん：{{ $comment->comment }}　({{ $comment->created_at}})</li>
						@endforeach
					@endif
					</ul>
				</div>
			</div>
			@auth
			<div class="search row mt-2 mb-4">
				<div class="comment_title col-md-3">
					コメント
				</div>
				<div class="col-9">
					<form class="comment-form" method="POST" action="{{ route('execomment')}}">
						@csrf
						<input type="text" id="inputComment" name="comment">
						<button name="key" value="{{ $bookdata->id }}">投稿</button>
					</form>
				</div>
			<div>
			@endauth

			@guest
			<p>ログインユーザーはコメントができます。</p>
			@endguest
			</div>
    </div>
  </div>
	</div>
	</body>
</html>

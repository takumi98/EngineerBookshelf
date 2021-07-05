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
		<div class="container">
			<div class="bookdetail row mt-5">
				<div class="img col-4">{{ $bookdata->image_file_name }}</div>
				<div class="book col-8">
					<!-- 本詳細画面 -->
					<div class="row mt-3">
						<div class="head col-2 offset-1">
							タイトル
						</div>
						<div class="col-8">
							{{ $bookdata->name }}
						</div>
					</div>
					<div class="row mt-3">
						<div class="head col-2 offset-1">
							出版社
						</div>
						<div class="col-8">
							{{ $bookdata->publisher }}
						</div>
					</div>
					<div class="row mt-3">
						<div class="head col-2 offset-1">
							発売日
						</div>
						<div class="col-8">
							{{ $bookdata->release_date }}
						</div>
					</div>
					<div class="row mt-3">
						<div class="head col-2 offset-1">
							価格
						</div>
						<div class="col-8">
							¥{{ $bookdata->price }}
						</div>
					</div>
					<div class="row mt-3">
						<div class="head col-2 offset-1">
							評価
						</div>
						<div class="col-8">
							{{ $bookdata->evaluation_id }}
						</div>
					</div>
					<div class="row mt-3">
						<div class="head col-2 offset-1">
							カテゴリー
						</div>
						<div class="col-8">
							{{ $bookdata->category_id }}
						</div>
					</div>
					<div class="row mt-3">
						<div class="head col-2 offset-1">
							投稿者
						</div>
						<div class="col-8">
							{{ $bookdata->bookshelf_id }}
						</div>
					</div>
				</div>
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
      <div class="comment row pt-3">
				<div class="title col-12">
					<h2>コメント</h1>
				</div>
				<div class="textcontainer col-12 m-3">
					<ul>
						<li>コメント1</li>
						<li>コメント2</li>
						<li>komennn</li>
					</ul>
				</div>
			</div>
			<div class="search row mt-2">
      <div class="col-1 offset-1">
        コメント
      </div>
      <div class="col-9">
        <form class="comment-form" action="" metdod="POST">
          @csrf
          <input type="text" id="inputComment" name="comment">
          <button name="key">
            投稿
          </button>
        </form>
      </div>
    </div>
    </div>
	</body>
</html>

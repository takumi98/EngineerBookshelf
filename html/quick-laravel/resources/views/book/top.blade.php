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
  <link href="{{ asset('css/top.css')}}" rel="stylesheet">
</head>
<body>
  <header>
		@include('header')
	</header>

  <div class="container">
    <h3>新着一覧</h1>
    <form class="comment-form" method="GET" action="{{ route('detail') }}">
      <div class="row mt-5 pt-4 offset-1">
        @foreach ($books as $book)
        <div class="book col-2">
          <div class="bookImg">
            {{ $book->image_file_name }}
            <input class="book_img" type="submit" name="book_id" value="{{ $book->id }}">
          </div>
          <div class="bookTitle">
            {{ $book->name }}
          </div>
        </div>
        @endforeach
      </div>
		</form>
    <div class="more mt-3 col-3 offset-8">
      <form action="{{ route('search') }}">
        <button>もっと見る</button>
      </form>
    </div>
    <div class="search row mt-3 mt-4">
      <div class="col-2 offset-1">
        書籍検索
      </div>
      <div class="col-5">
        <form class="search-form" action="{{ route('search') }}" method="GET">
          <input type="text" id="inputSearch" name="search">
          <button>
            検索
          </button>
        </form>
      </div>
    </div>
    <?php
		// var_dump($tests);
		?>

  </div>
</body>
</html>

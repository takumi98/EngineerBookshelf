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
  <link href="{{ asset('css/entry_books_form.css')}}" rel="stylesheet">
</head>

<body>
  <div class="container">
    <h1>書籍情報</h1>
    <form class="form-signin" method="POST" action="{{ route('ebooks')}}">
      @csrf
      <div class="row mt-5 pt-4">
        <div class="entrytitle col-2 offset-2">
          書籍タイトル
        </div>
        <div class="entryform col-5">
          <label for="inputTitle"></label>
          <input type="text" id="inputTitle" name="title">
        </div>
      </div>
      <div class="row mt-5">
        <div class="entrytitle col-2 offset-2">
          表紙画像
        </div>
        <div class="entryform col-5">
          <label for="inputImg"></label>
          <input type="text" id="inputImg" name="img">
        </div>
      </div>
      <div class="row mt-5">
        <div class="entrytitle col-2 offset-2">
          出版社
        </div>
        <div class="entryform col-5">
          <label for="inputPublisher"></label>
          <input type="text" id="inputPublisher" name="publisher">
        </div>
      </div>
      <div class="row mt-5">
        <div class="entrytitle col-2 offset-2">
          発売日
        </div>
        <div class="entryform col-5">
          <label for="inputReleaseDate"></label>
          <input type="text" id="inpuReleaseDate" name="date">
        </div>
      </div>
      <div class="row mt-5">
        <div class="entrytitle col-2 offset-2">
          価格
        </div>
        <div class="entryform col-5">
          <label for="inputPrice"></label>
          <input type="text" id="inputPrice" name="price">
        </div>
      </div>
      <div class="row mt-5">
        <div class="entrytitle col-2 offset-2">
          評価
        </div>
        <div class="entryform col-5">
          <label for="inputEvaluation"></label>
          <select name="Evaluation" id="inputEvaluation">
            @foreach ($evaluations as $e)
            <option value="{{ $e->code}}">{{ $e->content }}</option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="row mt-5">
        <div class="entrytitle col-2 offset-2">
          カテゴリー
        </div>
        <div class="entryform col-5">
          <label for="inputCategory"></label>
          <select name="Category" id="inputCategory">
            @foreach ($categories as $c)
            <option value="{{ $c->id }}">{{ $c->name }}</option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="row mt-5">
        <div class="entrytitle col-2 offset-2">
          詳細
        </div>
        <div class="entryform col-5">
          <label for="inputContent"></label>
          <textarea name="content" id="inputContent" cols="50" rows="5"></textarea>
        </div>
      </div>
      <div class="row mt-5">
        <div class="entrytitle col-2 offset-2">
          公開設定
        </div>
        <div class="entryform col-5">
          <label for="inputPrice"></label>
          <select name="published" id="inputPublished">
            <option value="open">公開</option>
            <option value="close">非公開</option>
          </select>
        </div>
      </div>
      <div class="row my-5">
        <div class="back col-2 offset-3">
          <button>戻る</button>
        </div>
        <div class="entry col-2">
          <button>登録して戻る</button>
        </div>
        <div class="continue col-2">
          <button>続けて登録</button>
        </div>
      </div>
    </form>
  </div>
</body>
</html>

<!-- <form class="form-inline">
  <div class="form-group mb-2">
    <label for="staticEmail2" class="sr-only">Eメール</label>
    <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="email@example.com">
  </div>
  <div class="form-group mx-sm-3 mb-2">
    <label for="inputPassword2" class="sr-only">パスワード</label>
    <input type="password" class="form-control" id="inputPassword2" placeholder="パスワード">
  </div>
  <button type="submit" class="btn btn-primary mb-2">同一性を確認</button>
</form> -->

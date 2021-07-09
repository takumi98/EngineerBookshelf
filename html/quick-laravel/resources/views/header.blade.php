    @auth
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
      <a class="navbar-brand" href="/">トップページ</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav" style="justify-content: center;">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link mx-2" href="entry_books">登録技術書一覧</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2" href="entry_books_form">技術書登録</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2" href="#">パスワード変更</a>
          </li>
          <li class="nav-item">
            <!-- <a class="nav-link" href="#">ログアウト</a> -->
            <form action="{{ route('logout') }}" method="POST">
              @csrf
              <button class="btn nav-link">ログアウト</button>
            </form>
          </li>
        </ul>
      </div>
    </nav>
    @endauth
  
    @guest
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="/">トップページ</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="/login">ログイン</a>
          </li>
        </ul>
      </div>
    </nav>
    @endguest

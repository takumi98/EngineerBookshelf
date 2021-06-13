
@extends('user.layout')
@section('content')
<!-- <div class="alert alert-danger" role="alert" th:if="${param.error}">
    ユーザIDとパスワードが一致しません。
</div>
<div class="alert alert-primary" role="alert" th:if="${param.logout}">
    ログアウトしました。
</div> -->
<h1 class="h3 mt-2 mb-3 font-weight-normal">ログイン</h1>
<form class="w-25 mx-auto" th:action="@{/login}" method="post">
   	<label for="username" class="sr-only"></label>
   	<input class="form-control" id="username"
   			type="text" name="username" placeholder="ユーザID" 
   			required autofocus/>
   	<label for="password" class="sr-only"></label>
   	<input class="form-control" id="password"
   			type="password" name="password" placeholder="パスワード" 
   			required/>
   	<input class="btn btn-outline-primary my-1" type="submit" value="Sign In"/>
</form>
<p class="mt-2 mb-3 text-muted">&copy; 2021</p>
@endsection

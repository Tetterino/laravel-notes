<!doctype html>
<html>
<head>
    <title>登録ページ</title>
</head>
<body>
    <h1>登録ページ</h1>
    <!-- <form action="{{ url('/create')}}" method="POST">
        {{ csrf_field() }}
        <textarea name="title"></textarea>
        <textarea name="description"></textarea>
        <button type="submit" name="register">追加</button>
    </form> -->
    <h1>新規登録画面</h1>
    <form method="post" action="/register">
        {{ csrf_field() }}
        <label for="titleInput">タイトル</label>
        <input type="text" name="title">
        <label for="bodyInput">詳細</label>
        <input type="text" name="description">
      <button type="submit" class="btn btn-primary">登録</button>
    </form>
</body>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COACHTECH</title>
</head>

<body>
  <h1>トップページ</h1>
  <form action="/contact/end" method="POST">
    @csrf
    <label>氏名</label></br>
    <input type="text" name="name"></br>
    <label>メールアドレス</label></br>
    <input type="e-mail" name="mail"></br>
    <input type="submit" value="送信する">
  </form>
</body>

</html>
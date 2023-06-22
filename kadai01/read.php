<header>
  <style>
  img{
    width: 500px;
    height: 600px;
  }
  </style>
</header>
<head>
    <meta charset="utf-8">
    <title>書籍一覧</title>
</head>


<?php
$data = file_get_contents('data/data.txt');

// 読み込んだデータをブラウザに表示する
echo nl2br($data);
echo "<br>";
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <p><a href="input.php">戻る</a></p>
</body>
</html>
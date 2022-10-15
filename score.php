<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
  <title>スコア</title>
</head>
<body>
<?php
$postTeam = $_POST['team'];
$postMonth = $_POST['month'];
$postDate = $_POST['date'];

// URLを生成
// 月と日付を2桁にする
if (strlen($postMonth) === 1) {
  $month = 0 . $postMonth;
}
if (strlen($postDate) === 1) {
  $date = 0 . $postDate;
}

$urlDate = 22 . $month . $date;
// https://baseball-freak.com/game/220917yb-c.html

// URLの存在チェック
$url = 'https://baseball-freak.com/game/220917yb-c.html';
$header = @get_headers($url);
if ($header[0] === 'HTTP/1.1 200 OK') {
  echo '存在する';
} else {
  echo '存在しない';
}

?>
</body>

</html>

<?php

$omikuji = array('バナナ', 'ポッキー', 'テレホンカード')

//配列の数は三つだけど配列の数字は0.1.2で、2までだからcountされると3だけど、2までのランダムな数字がほしいから１をひく
$result = $omikuji[mt_rend(0, count($omikuji)-1)];

?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>今日のラッキーアイテム</title>
</head>
<body>
	<h1>アイテム</h1>
	<p>今日のラッキーアイテムは「<?php echo $result; ?>」です！</p>
	<!--hrefは空にするとまた同じファイルを指定することになる -->
	<p><a href="<?php echo $_SERVER["SCRIPT_NAME"]; ?>">もう一回やってみよう！</a></p>
</body>
</html>

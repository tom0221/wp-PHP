<?php
//array関数を使い、日本人の名字ベスト3の配列を作成
$nameData = array("佐藤","鈴木","高橋");
$index = 0;
?>

<html>
	<head>
		<meta http-equiv="Content-Type"content="text/html; charset=UTF-08">
	</head>
	<body>
	<?php
		echo "日本人の名字ベスト1位は",$nameData[$index],"です。";
	?>
	</body>
</html>


<?php
	$profile['name'] = "神田ごろう"; //キーnameを指定して、配列に格納
	$profile['身長'] = 169.5;       //キー身長を指定して、配列に格納
	$profile['age'] = 19;           //キーageを指定して、配列に格納
	$profile['型'] = 'A';          //キー型を指定して、配列に格納
?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	</head>
	<body>
	<?php
		echo $profile['name'],"さんの身長は", $profile['身長'], "cmです。<br>";
		echo "年齢は", $profile['age'],"歳、血液型は", $profile['型'], "です。<br>";	?>

	</body>
</html>
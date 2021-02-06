<html>
	<head>
		<meta http-equiv="Content-Type"content="text/html; charset=UTF-08">
	</head>
	<body>
	<?php
		//画面からの入力データを取得
		$num = $_POST['number:practiceForm.php'];

		//偶数奇数判定を行う
		if(($num % 2 ) == 0){
			echo $num, "は偶数です。";
		}else{
			echo $num, "は奇数です。";
		}
	?>
	</body>
</html>



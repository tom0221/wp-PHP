<?php
    //名前用の変数
    $name = "神田ごろう";

    //身長用の変数
    $height = 169.5;

    //年齢用の変数
    $age = 19;
 ?>
 <html>
     <head>
         <meta http-equiv="Content-Type"content="text/html;charset=UTF-8">
     </head>
     <body>
    <?php
        echo$name,'さんの身長は',$height,"cmです。<br>";
        echo"年齢は",$age,"歳です。";

        //$ageを20に変更
        $age=20;

        echo"あと1ヶ月で",$age,"歳になります。";
    ?>

    //5.4 練習問題
    <?php
        $name1 = "神田じろう";
        $name2 = $name1;
        echo "初めまして",$name2,"です。";
    ?>

     </body>
 </html>






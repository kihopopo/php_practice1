<?php
$i = 1; // 初期化
while ($i <366): //繰り返し構文
    echo $i . '日<br>';
    $i = $i + 1; //更新
endwhile;
?>



<!-- 日など数字と文字の表示をしたい場合、上の記載になる -->
<!-- 前回と比べ、4行目と5行目が逆になる -->
<!-- この場合、365日までになる -->
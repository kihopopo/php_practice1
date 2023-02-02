<?php
$today = new DateTime();
$today->setTimezone(new DateTimeZone('Asia/Tokyo'));
echo '現在は、' .$today->format('G時 i分 s秒').'です';
?>

<!-- $todayは、オブジェクトの一種である
dateと$today->formatはほぼ同じ意味
オブジェクトを使う場合は、２行目のように宣言が必要
オブジェクトとメソッドを繋ぐ場合、->が必要である -->
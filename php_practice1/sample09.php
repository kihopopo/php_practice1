<?php
date_default_timezone_set('Asia/Tokyo');

for($i=0; $i<366; $i++):
    $time = strtotime('+' . $i . ' day');
    $day = date('n/j(D)', $time);
    echo $day . '<br>';
endfor;
?>

<!-- timestampは、Unixタイムスタンプで現在以外の日時も指定可能 -->
<!-- Unixスタンプは、秒数を表す -->

<!-- strtotimeは、String to timeのこと -->
<!-- strtorimeは、()で指示した日時を表示する -->
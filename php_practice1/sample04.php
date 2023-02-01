<?php
date_default_timezone_set('Asia/Tokyo');
echo '現在は、'.date('G時 i分 s秒').'です';




// dateもファンクションの一つ
// echoと一緒にしか使えない
// 表示された時刻の時差を防ぐためにdate_default_timezone_set('Asia/Tokyo');を記載

// NG echo '現在は、date('G時 i分 s秒')です';
// 「現在は」と「です」は文字列でシングルクォーテーションが必要となり、date()とそのまま表示されてしまう

// echo '現在は、';
// echo date('G時 i分 s秒');
// echo 'です';
// とすれば、表示されるがまとまりが悪い

// 上の記述のように.（ドット）で繋げば文字列連結ができる
// echoは、,(カンマ)でも文字列連結ができる
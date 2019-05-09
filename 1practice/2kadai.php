<?php
// $array_month という配列に1月〜12月の文字列を代入し、echoで8月を表示してみましょう。
$array_month = [];
for($i=1;$i<=12;$i++){
    $array_month[$i - 1] = $i . "月";
}
echo $array_month[7];
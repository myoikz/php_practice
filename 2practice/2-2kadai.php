<?php
/*for文を使って、1から10000までの合計の値を表示してください。*/

$total = 0;

for($i=0; $i<=10000; $i++){
    $total += $i;
}

echo $total;
echo "\n"

?>
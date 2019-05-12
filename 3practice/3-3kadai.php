<?php
/*$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください。*/

$array = array(1, 3, 5 ,7, 9);

function all_multi($arr){
    $result = 1;
    for($i=0; $i<count($arr); $i++){
        $result *= $arr[$i];
    }
    return $result;
}

echo all_multi($array);
echo "\n";

?>
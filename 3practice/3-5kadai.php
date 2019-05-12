<?php
/*次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。

strip_tags
array_push
array_merge
time, mktime
date*/

//strip_tags
/*
$text = '<p> Test paragraph.</p><!-- Comment --><a href="#fragment">Other text</a>';
echo strip_tags($text);
echo "\n";

echo strip_tags($text, '<p><a>');
*/

//array_push
/*
$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");
print_r($stack);
*/

//array_merge
/*
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);
*/

//time
/*
$nextWeek = time() + (7 * 24 * 60 * 60);
                   // 7 日 * 24 時間 * 60 分 * 60 秒
echo 'Now:       '. date('Y-m-d') ."\n";
echo 'Next Week: '. date('Y-m-d', $nextWeek) ."\n";
echo 'Next Week: '. date('Y-m-d', strtotime('+1 week')) ."\n";
*/

//mktime
/*
date_default_timezone_set('UTC');
echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000));
echo date('c', mktime(1, 2, 3, 4, 5, 2006));
*/

//date
echo date('l \t\h\e jS');
?>
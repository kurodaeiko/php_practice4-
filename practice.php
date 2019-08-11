<?php
/*PHP/Laravel 04 関数を理解しよう*/
//課題1
function sum($max)	{
	return $max*2;
}
echo sum(9);
echo "\n";

//課題2
function f($a,$b){
    $result = 0;
    $result = $a +$b;

return $result;
}

//課題3
$arr = array(1,3,5,7,9);
echo array_product($arr);
echo "\n";

//課題3-2
$result = 1;
foreach ($arr as $a){
 $result = $result * $a;
}
return $result;



//課題4
 function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
 //どうしたらいいかわからない・・・・
 if ($max_number < $a){
  $max_number = $a;
 }
  return $max_number;
 }
 
 //課題5
 //strip_tags(HTMLなどのタグを消す）
 $html_body = 'テスト<br><p>テスト</p><strong>テスト</strong>';
 $html_body = strip_tags($html_body);
 echo $html_body;
 echo "\n";
 
 //array_push（一つ以上の要素を配列の最後に追加する）
$stack = array("オレンジ");
array_push($stach, "リンゴ", "ぶどう");
print_r($stack);

//array_merge(←この関数と配列結合演算子⁺による重複キーの扱い)
$ar1 = array("t"=>"東京", "c"=>"千葉県");
$ar2 = array("t"=>"東京都", "k"=>"神奈川県");
//既存要素を上書きする
$ar3 = my_array_merge($ar1, $ar2, true);
print_r($ar3);
//上書き指定が可能な配列結合関数
function my_array_merge($ar1, $ar2, $overwrite = false){
 if($overwrite){
  $temp = array_merge($ar1, $ar2);
 }else{
  $temp =$ar1 + $ar2;
 }
 return $temp;
 }
}

 //time, mktime
 echo "今の時間：".time();
 echo "<br>";

//mktime()は引数で指定した日時のタイムスタンプを取得します。
echo  mktime();
echo date("|",mktime(0,0,0,1,1,2010));

<?php
/*演習 1 */
/*変数定義　名前を入れます*/
$name = "奥村すず";
/*条件分岐 Start*/
if ($name == "奥村すず") {
  echo "私は{$name}です"."\n";
} else {
  echo "奥村すずではありません"."\n";  
}
/*条件分岐　End*/
echo "\n";

/*演習 2 */
/* 1 から10000 までの合計値の計算 */
/* 変数定義 結果を格納します*/
$total = 0;
/*繰り返し処理*/
for ( $i = 1 ; $i <= 10000 ; $i++ ){
  $total += $i;
}
echo $total."\n\n";

/* 演習 3 */
/* 好きな果物をお知らせします */
/* 配列を定義 */
$fruits = array("桃","マンゴー","バナナ", "リンゴ", "イチゴ");
/* 配列を順次出力します*/
  echo "私の好きな果物は"."\n";
foreach( $fruits as $fruit ){
  echo $fruit."\n";
}
  echo "です"."\n\n";
  
/* 演習 4 */
/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i."\n";
  } 
}
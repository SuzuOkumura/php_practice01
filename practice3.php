<?php
/*演習 1*/ 
/*数値を2倍にする関数*/
function multiple2 ( $num ) {
  $i = 2;
  return $i * $num;
}
echo multiple2(24)."\n";


/*演習2*/
function summary1 ( $a, $b ) {
  //戻り値変数の初期化
  $sum1 = 0;
  $sum1 = $a + $b;
  return $sum1;
}
echo summary1(12,8)."\n";

/*演習3*/
//関数の定義：配列の要素をすべて掛け算します
//array_product を使う場合
function multiple3($arr){
  //戻り値変数の初期化
  $ans1 = 0;
  $ans1 = array_product($arr);
  return $ans1;
}
//配列の定義
$mul1 = array(1, 3, 5, 7, 9);
echo multiple3($mul1)."\n";

//配列を順次ループで読み込む場合
//考え方　→　配列をカウントする
function multiple3b($arr2){
  //計算結果格納変数の初期化
  $ans2 = $arr2[0];
  //配列を順次ループして読み込みます
  //配列のカウントがループ回数の上限
  for( $i = 1; $i < count($arr2); $i++ ){
    $ans2 *= $arr2[$i];
  }
  return $ans2;
}
//配列の定義
$mul2 = array(1, 3, 5, 7, 9);
echo multiple3b($mul2)."\n";


/*演習4*/
function max_array($arr){
 // とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
   if( $a > $max_number ){
     //順次読みだした配列値が前の値より大きければ最大値とする
     $max_number = $a;
   }
 }
 //最大値の出力
 return $max_number;
 }
//配列の定義
$arr = array(1, 10, 5, 14, 9);
echo max_array($arr)."\n";

/*演習5*/
/*strip_tags について
htmlタグを取り除いてくれます
*/
//例となるページを読み込みます
$html = '<html><head><title>Name</title></head><body><div><h1>Suzu Okumura</h1><br></body></html>';
//第2引数は、残したい文字を指定できます
echo strip_tags($html,'<title>')."\n";

/*array_push について
配列に、後から値を追加できます
*/
$members=array('鮫島彩','澤穂希','中島依美');
array_push($members,'岩渕真奈','田中美南');
print_r($members)."\n";

/*array_merge について
配列の後ろに配列を追加
*/
$members=array('鮫島彩','澤穂希','中島依美');
$members=array_merge($members,array('岩渕真奈','田中美南'));
print_r($members)."\n";

/*time について
現在のUNIXタイムスタンプを INT 型で取得する
*/
$time1 = time();
echo '現在時刻のタイムスタンプ＝'.$time1;
echo "\n";
//INT型で取得すると、加算も簡単
$time2 = time() + ( 7 * 24 * 60 * 60 );
echo '7日後のタイムスタンプ＝'.$time2;
echo "\n";


/*mktime について
指定した時刻のUNIXタイムスタンプを INT 型で取得する
int mktime( [ 時 [, 分 [, 秒 [, 月 [, 日 [, 年 [, int is_dst ]]]]]]] )
*/
$time3 = mktime(7, 10, 0, 3, 5, 2020);
echo "2020/3/5 07:10:00 のタイムスタンプ＝".$time3."\n";

/*date について
任意のフォーマットで日付の文字列を取得する
string date ( string $format [, int $timestamp = time() ] )
第2引数を省略すると、現在日時を返します
*/
echo date('Y-m-d')."\n";
echo date('Y-m-d H:i:s')."\n";
echo date('Y年m月d日 H時i分s秒')."\n";
echo date('Y-m-d',15833922)."\n";



?>

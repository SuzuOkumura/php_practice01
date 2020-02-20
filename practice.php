<?php
echo 'hello php!'."\n";

$a = 3;
$b = 7;
echo $a + $b."\n";

$array = ["1月","2月","3月","4月","5月","6月","7月","8月","9月","10月","11月","12月"];
echo $array[7]."\n";

$hello = "Hello,";
$name = "奥村すず";
$world = "'s World!";
echo $hello.$name.$world."\n";

$tech_boost = "tech";
$tech_boost .= "boost";
echo $tech_boost."\n";

$_2018_calendar = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];

// 12月を表示する
echo $_2018_calendar["December"]."\n";


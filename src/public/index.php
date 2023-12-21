<?php 

//期待する出力になるようにコードを追加しましょう(foreach文を使用してください)
// 1番目: ブラジルが入っています。
// 2番目: 日本が入っています。
// 3番目: スペインが入っています。


$countries = ["ブラジル", "日本", "スペイン"];
foreach ($countries as $number => $countryName ){
  echo $number +1 . "番目：" . $countryName . "が入っています。" . "<br>";
}
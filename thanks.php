<?php



$name=$_POST['name'];


$mail=$_POST['mail'];

$shurui=$_POST['shurui'];

$toiawase=$_POST['toiawase'];

$naiyou=array($name,$mail,$shurui,$toiawase);

$file=fopen("test.csv","w");

fputcsv($file,$naiyou);

fclose($file);

?>

<!DOCTYPE html>
<html>
<lang type="ja">
  <head>
    <meta charset="utf-8">
    <title>さんくすページ</title>

  </head>
  <body>
  <h2>ありがとうございました</h2>
  </body>
  </html>
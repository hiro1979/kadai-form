<?php

session_start();


$name=$_SESSION['name'];


$mail=$_SESSION['mail'];

$shurui=$_SESSION['shurui'];

$toiawase=$_SESSION['toiawase'];

?>
<!DOCTYPE html>
<lang type="ja">
  <head>
    <meta charset="utf-8">
    <title>確認</title>
    <link type="text/css" rel="stylesheet" href="style.css">
  </head>
  <body>
  <h2>確認画面</h2>
  <form action="thanks.php" method="post">
  <table>
    <tr>
      <td class="left">お名前</td><td><?php echo $name;?></td>
      <input type="hidden" name="name" value="<?php echo $name;?>">
    </tr>
    <tr>
      <td class="left">メールアドレス</td><td><?php echo $mail;?></td>
      <input type="hidden" name="mail" value="<?php echo $mail;?>">
    </tr>
<tr>
      <td class="left">種類</td><td><?php echo $shurui;?></td>
      <input type="hidden" name="shurui" value="<?php echo $shurui;?>">
    </tr>
    <tr>
      <td class="left">お問い合わせ内容</td><td><?php echo $toiawase;?></td><input type="hidden" name="toiawase" value="<?php echo $toiawase;?>">
    </tr>
  </table>
  <input type="submit" value="送信する" class="submit_button"></form>
  <a href="form.php"><input type="submit" value="戻る"  class="submit_button"></a>
  </body>
  </html>
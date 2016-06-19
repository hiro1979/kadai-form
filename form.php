<?php

session_start();


$errors=array();

 if($_SERVER['REQUEST_METHOD']=='POST'){

   $name=$_POST['name'];
   $mail=$_POST['mail'];
  $shurui=$_POST['shurui'];
   $toiawase=$_POST['toiawase'];

   $_SESSION['name']=$name;
$_SESSION['mail']=$mail;
$_SESSION['shurui']=$shurui;
$_SESSION['toiawase']=$toiawase;

 if($name ==''){
   $errors['name'] ='名前が未入力です';
 }
 if(empty($errors)){
header('Location: confirm.php');
}
}


?>


<!DOCTYPE html>
<html>
<lang type="ja">
  <head>
  <meta charset="utf-8">
    <title>問い合わせフォーム</title>
    <link type="text/css" rel="stylesheet" href="style.css">
    <link type="text/css" rel="stylesheet" href="reset.css">
  </head>
  <body>
  <h1>お問い合わせ</h1>
<form  action="" method="post">
  <table>
  <tr>
    <td class="left"><h2>お名前<font color="red">（必須）</font></h2></td>
    <td><input type="text" name="name" value="<?php if($_SESSION['name']){echo $_SESSION['name'];}?>" class="hoge"><?php if(isset ($errors['name'])):?>
    <?php echo $errors['name'] ;?><?php endif ?></td>
  </tr>

  <tr><td class="left"><h2>メールアドレス</h2></td>
    <td><input type="text" name="mail" value="<?php if($_SESSION['mail']){echo $_SESSION['mail'];}?>">
    </td>
  </tr>
  <tr><td class="left"><h2>種類</h2></td>
    <td><select name="shurui">
      <option value="商品について">商品について</option>
      <option value="お支払いについて">お支払いについて</option>
      <option value="当サイトについて">等サイトについて</option>
    </select></td></tr>


    <tr><td class="left"><h2>お問い合わせ内容</h2></td>
      <td><textarea name="toiawase" cols="40" row="80"><?php if($_SESSION['toiawase']){echo $_SESSION['toiawase'];}?></textarea></td>
  </tr>

  </table>

  <input type="submit"  value="確認画面へ" class="submit_button"></div>
  </form>

  </body></html>
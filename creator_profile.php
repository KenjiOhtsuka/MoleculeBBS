<?php
  require_once('constants.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title><?php echo ConstText::BBStitle; ?></title>
<?php
  include('meta.php');
  include('headerScript.php');
  include('css.php');
?>
</head>
<body>
<h1><?php echo ConstText::BBStitle; ?></h1>
<?php
  include('headerPanel.php');
?>


<?php
  $title = "作者のちょっとした説明";
  $message = "構造式の描画をサポートするjavascriptがあるのに そういうのを使って議論できる場所がないのはもったいないと思って この掲示板を作りました。";
  $message .= "ほかに、数式の表示できる数学掲示板、楽譜の表示できる音楽掲示板などを作りました。";
  echo createIntroductionHtml($title, 'escamilloIII', '16198161', '', 'black', $message);
?>


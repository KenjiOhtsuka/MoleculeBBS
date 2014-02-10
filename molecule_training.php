<?php
  require_once('constants.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>構造式練習場 - <?php echo ConstText::BBStitle; ?></title>
<?php echo metaTags($keyword); ?>
<?php
  include('headerScript.php');
  include('css.php');
?>
<!--
<script type="text/javascript" src="mathjax/MathJax.js"></script>
<script type="text/javascript" src="mathjax/MathJax.js?config=TeX-AMS_HTML-full"></script>
-->
<script type="text/javascript">
  window.onload = function() {
    var doc = document;
    doc.getElementById('add').onclick = function() {

    }
    doc.getElementById('remove').onclick = function() {

    }
  }
</script>
</head>
<body>
<h1><?php echo ConstText::BBStitle; ?> - 構造式練習場</h1>
<?php
  include('headerPanel.php');
?>

<?php
  $title = "構造式練習場";
  $message = "ここでは、構造式の練習ができます。<br />";
  $message .= "リアルタイムプレビューにチェックを入れると、テキストを編集する度に、随時結果が右側に表示されます。ただしその場合、処理が増えるためレスポンスが遅くなります。<br />";
  $message .= "表示されている構造式を右クリックして Show source を選択すると、 $\TeX$ での数式の書き方が表示されます。<br />";
  $message .= "javascript を使用しています。";
  echo createIntroductionHtml($title, '', '', '', 'black', $message);
?>
<table id="EditTable">
  <tbody>
    <tr>
      <td>
        <div class="TrainMolInput">
          <div id="jsme_container"></div>
        </div>
      </td>
      <td>
        <div class="TrainMolOutput">
          <div name="molecule_output">
                    <div code="JME.class" archive="JME.jar" width=250 height=120>
                    <param name="options" value="depict">
                    <param name="mol"
                      value="$RXN


JME Molecular Editor
  2  1
$MOL
[O:2]=[CH:1]Cl.[H:3][NH:1][CH3:2]>>[H:5][N:3]([CH3:4])[CH:1]=[O:2]
JME 2013-10-12 Mon Feb 03 18:14:23 GMT+900 2014
 
  3  2  0  0  0  0  0  0  0  0999 V2000
    0.0000    0.6984    0.0000 C   0  0  0  0  0  0  0  0  0  1  0  0
    0.0000    2.0951    0.0000 O   0  0  0  0  0  0  0  0  0  2  0  0
    1.2172    0.0000    0.0000 Cl  0  0  0  0  0  0  0  0  0  0  0  0
  1  2  2  0  0  0  0
  1  3  1  0  0  0  0
M  END
$MOL
[O:2]=[CH:1]Cl.[H:3][NH:1][CH3:2]>>[H:5][N:3]([CH3:4])[CH:1]=[O:2]
JME 2013-10-12 Mon Feb 03 18:14:23 GMT+900 2014
 
  3  2  0  0  0  0  0  0  0  0999 V2000
    0.7005    1.2109    0.0000 N   0  0  0  0  0  0  0  0  0  1  0  0
    2.1016    1.2109    0.0000 C   0  0  0  0  0  0  0  0  0  2  0  0
    0.0000    0.0000    0.0000 H   0  0  0  0  0  0  0  0  0  3  0  0
  1  2  1  0  0  0  0
  1  3  1  0  0  0  0
M  END
$MOL
[O:2]=[CH:1]Cl.[H:3][NH:1][CH3:2]>>[H:5][N:3]([CH3:4])[CH:1]=[O:2]
JME 2013-10-12 Mon Feb 03 18:14:23 GMT+900 2014
 
  5  4  0  0  0  0  0  0  0  0999 V2000
    0.0000    2.0983    0.0000 C   0  0  0  0  0  0  0  0  0  1  0  0
    0.0000    3.4972    0.0000 O   0  0  0  0  0  0  0  0  0  2  0  0
    1.2090    1.3989    0.0000 N   0  0  0  0  0  0  0  0  0  3  0  0
    2.4281    2.0983    0.0000 C   0  0  0  0  0  0  0  0  0  4  0  0
    1.1990    0.0000    0.0000 H   0  0  0  0  0  0  0  0  0  5  0  0
  1  2  2  0  0  0  0
  1  3  1  0  0  0  0
  3  4  1  0  0  0  0
  3  5  1  0  0  0  0
M  END
">

                  </div>
          </div>
          <form action='#'>
            <button type="button" id="add">追加</button>
            <button type="button" id="remove">削除</button>
          </form>
        </div>
      </td>
    </tr>
  </tbody>
</table>
</body>
</html>


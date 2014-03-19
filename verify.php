<?php
session_start();

require_once('constants.php');

$taskId = mt_rand();
$_SESSION['taskId'] = $taskId;
$taskId = md5($taskId);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $writer = htmlspecialchars($_POST["writer"]);
  $title = htmlspecialchars($_POST["title"]);
  $smiles = htmlspecialchars($_POST["smiles"], ENT_QUOTES);
  $jmestring = htmlspecialchars($_POST["jmestring"], ENT_QUOTES);
  $molfile = htmlspecialchars($_POST["molfile"], ENT_QUOTES);
  $message = htmlspecialchars($_POST["message"], ENT_QUOTES);
  //$message = mysql_real_escape_string($message);
  $message = nl2br($message);
  //$message = mb_eregi_replace('/[[(\r\n)\r\n](<br\s/>)]/g', ' <br /> ', $message);
  $twitter_id = htmlspecialchars($_POST["twitterID"]);
  $mixi_id = htmlspecialchars($_POST["mixiID"]);
  $facebook_id = htmlspecialchars($_POST["facebookID"]);
  $color = htmlspecialchars($_POST["color"]);
  //$password = htmlspecialchars($_POST["password"]);
  $topic_id = htmlspecialchars($_POST["topic_id"]);
  $post_id = htmlspecialchars($_POST["post_id"]);

// if ($_POST['mode'] != ModeType::Edit) {
//   $header_message = '<p>下記内容で更新します。よろしければ「更新する」ボタンをクリックしてください。<br />(twitter のリンクは、更新後に再構成されます。)</p>';
// } else {
//   $header_message = '<p>下記内容で投稿します。よろしければ「投稿する」ボタンをクリックしてください。<br />(twitter のリンクは、投稿後に再構成されます。)</p>';
// } 
  $header_message = '投稿します。よろしいですか？';
echo <<<EOT
  {$header_message}
  <!--
  <h2>{$title}</h2>
  <div>
    <div style="float:right;">
EOT;
  echo createSocialLink($twitter_id, $mixi_id, $facebook_id, $title, $topic_id);
echo <<<EOT
    </div>
    <div>By {$writer}</div>
  </div>
  <hr />
  <div id="molculePreview" code="JME.class" archive="JME.jar" width="600" height="350">
    <param name="options" value="depict">
    <param name="mol" value="{$molfile}">
  </div>
  <div style="color:{$color};clear:both;" id="verifyPreview" name="verifyPreview">{$message}</div>
  -->
  <form action="{$_SERVER['PHP_SELF']}" onsubmit="return formOnPost();" method="POST" name="ConfirmDialog" id="ConfirmDialog">
    <input type="submit" value="投稿する" />
    <input type="reset" value="キャンセル" onclick="cancelOnClick();" />
    <input type="hidden" value="{$taskId}" name="preTaskId" id="preTaskId" />
    <input type="hidden" value="{$molfile}" name="preMolfile" id="preMolfile" />
    <input type="hidden" value="{$jmestring}" name="preJmestring" id="preJmestring" />
    <input type="hidden" value="{$smiles}" name="preSmiles" id="preSmiles" />
  </form>
EOT;
}
?>

<script type="text/x-mathjax-config">
  MathJax.Hub.Config({
    extensions: ["tex2jax.js"],
    jax: ["input/TeX","output/HTML-CSS"],
    tex2jax: {inlineMath: [["$","$"],["\\(","\\)"]],
              displayMath: [ ['$$','$$'], ["\\[","\\]"]]}
  });
</script>
<script type="text/javascript"
  src="http://cdn.mathjax.org/mathjax/latest/MathJax.js">
</script>
<script type="text/javascript"
  src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_full">
</script>
<script type="text/javascript" language="javascript"
  src="javascript/jsme/jsme.nocache.js"></script>
<script>
  //this function will be called after the JavaScriptApplet code has been loaded.
  function jsmeOnLoad() {
    var edit_panel_id = "jsme_container";
    if (document.getElementById(edit_panel_id)) {
      jsmeApplet = new JSApplet.JSME(edit_panel_id, "380px", "340px");
    }
  }
</script>
<?php
  if ($pattern == PageType::Unknown || $pattern == PageType::Comment ||
      $pattern == PageType::Board || $pattern == PageType::Topic) {
    echo '  <script type="text/javascript" src="inputScript.js"></script>';
  }
?>


<script language="JavaScript">function submitSmiles() {
  var smiles = document.JME.smiles();
  var jme = document.JME.jmeFile();
  if (smiles == "") {
    alert("Nothing to submit");
  }
  else {
    opener.fromEditor(smiles,jme);
    window.close();
  }
}

function openHelpWindow() {
  window.open("http://www.molinspiration.com/jme/help/jme2008hints.html","jmehelp","toolbar=no,menubar=no,scrollbars=yes,resizable=yes,width=510,height=675,left=400,top=20");
}
</script>
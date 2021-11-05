<?php
$vector = isset($_GET['vector']) ? $_GET['vector'] : '';
$auto = isset($_GET['auto']) ? (int) $_GET['auto'] : 0;
$amount = 0xfff;
$pos = isset($_GET['pos']) ? (int) $_GET['pos']: 0;
function replaceVector($chrNum, $vector) {
  $chr = mb_convert_encoding('&#'.$chrNum.';', 'UTF-8', 'HTML-ENTITIES');
  $vector = str_replace('$chr', $chr, $vector);
  $vector = str_replace('$hex2', str_pad(dechex($chrNum), 2, '0', STR_PAD_LEFT), $vector);
  $vector = str_replace('$hex4', str_pad(dechex($chrNum), 4, '0', STR_PAD_LEFT), $vector);
  $vector = str_replace('$hex6', str_pad(dechex($chrNum), 6, '0', STR_PAD_LEFT), $vector);
  $vector = str_replace('$num', $chrNum, $vector);
  return $vector;
}
?>
<!doctype HTML>
<html>
<head>
<meta charset="UTF-8" />
<style>
body {
  font-size:10px;
}
</style>
<script>
function auto() {
  let next = document.querySelector('#next');
  next.href += '&auto=1';
  next.click();
}
onload = function() {
  <?=$auto?'setTimeout(auto, 2000);':''?>
  const url = new URL(window.location);
  top.history.pushState({}, '', 'index.php?'+url.searchParams);
};
</script>
</head>
<body>
<p>
  <a href="?pos=<?=$pos-$amount>0?$pos-$amount:0?>&vector=<?=rawurlencode($vector)?>">Back</a> | <a href="#" onclick="auto();return false">Auto</a> | <a href="?pos=0&vector=<?=rawurlencode($vector)?>">Start</a>  | <a href="#" onclick="top.location='index.php'">Reset</a> | <a id="next" href="?pos=<?=$pos+$amount?>&vector=<?=rawurlencode($vector)?>">Next</a> 
</p>
<?php 
for($i=$pos;$i<=$pos+0xfff;$i++) {
if($i > 0x10ffff){
break;
}
?>
<style>#div<?=$i?>{margin: 1px;margin-top:0;margin-bottom:0;float: left;<?=replaceVector($i, $vector);?>}</style>
<div id="div<?=$i?>"><?=$i?></div>
<?
}
?>
</body>
</html>
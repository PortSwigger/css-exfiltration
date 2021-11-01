<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/font-woff2");
header("Cache-Control: no-cache");
readfile('font.woff2');
exit();
?>
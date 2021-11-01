<?php
header("Content-Type: text/css");
$generate = (int) $_GET['generate'];
?>
<?php FOR($i=1;$i<$generate+1;$i++):?>
<?php $cacheBuster = microtime(true);?>
@font-face {
    src: url("/a?<?=$cacheBuster?>");
    unicode-range: U+0061;
    font-family: steal<?=$i?>;
 }
 @font-face {
    src: url("/b?<?=$cacheBuster?>");
    unicode-range: U+0062;
    font-family: steal<?=$i?>;
 }
 @font-face {
    src: url("/c?<?=$cacheBuster?>");
    unicode-range: U+0063;
    font-family: steal<?=$i?>;
 }
 @font-face {
    src: url("/d?<?=$cacheBuster?>");
    unicode-range: U+0064;
    font-family: steal<?=$i?>;
 }
 @font-face {
    src: url("/e?<?=$cacheBuster?>");
    unicode-range: U+0065;
    font-family: steal<?=$i?>;
 }
 @font-face {
    src: url("/f?<?=$cacheBuster?>");
    unicode-range: U+0066;
    font-family: steal<?=$i?>;
 }
 @font-face {
    src: url("/g?<?=$cacheBuster?>");
    unicode-range: U+0067;
    font-family: steal<?=$i?>;
 }
 @font-face {
    src: url("/h?<?=$cacheBuster?>");
    unicode-range: U+0068;
    font-family: steal<?=$i?>;
 }
 @font-face {
    src: url("/i?<?=$cacheBuster?>");
    unicode-range: U+0069;
    font-family: steal<?=$i?>;
 }
 @font-face {
    src: url("/j?<?=$cacheBuster?>");
    unicode-range: U+006a;
    font-family: steal<?=$i?>;
 }
 @font-face {
    src: url("/k?<?=$cacheBuster?>");
    unicode-range: U+006b;
    font-family: steal<?=$i?>;
 }
 @font-face {
    src: url("/l?<?=$cacheBuster?>");
    unicode-range: U+006c;
    font-family: steal<?=$i?>;
 }
 @font-face {
    src: url("/m?<?=$cacheBuster?>");
    unicode-range: U+006d;
    font-family: steal<?=$i?>;
 }
 @font-face {
    src: url("/n?<?=$cacheBuster?>");
    unicode-range: U+006e;
    font-family: steal<?=$i?>;    
 }
 @font-face {
    src: url("/o?<?=$cacheBuster?>");
    unicode-range: U+006f;
    font-family: steal<?=$i?>;
 }
 @font-face {
    src: url("/p?<?=$cacheBuster?>");
    unicode-range: U+0070;
    font-family: steal<?=$i?>;
 }
 @font-face {
    src: url("/q?<?=$cacheBuster?>");
    unicode-range: U+0071;
    font-family: steal<?=$i?>;
 }
 @font-face {
    src: url("/r?<?=$cacheBuster?>");
    unicode-range: U+0072;
    font-family: steal<?=$i?>;
 }
 @font-face {
    src: url("/s?<?=$cacheBuster?>");
    unicode-range: U+0073;
    font-family: steal<?=$i?>;
 }
 @font-face {
    src: url("/t?<?=$cacheBuster?>");
    unicode-range: U+0074;
    font-family: steal<?=$i?>;
 }
 @font-face {
    src: url("/u?<?=$cacheBuster?>");
    unicode-range: U+0075;
    font-family: steal<?=$i?>;    
 }
 @font-face {
    src: url("/v?<?=$cacheBuster?>");
    unicode-range: U+0076;
    font-family: steal<?=$i?>;
 }
 @font-face {
    src: url("/w?<?=$cacheBuster?>");
    unicode-range: U+0077;
    font-family: steal<?=$i?>;
 }
 @font-face {
    src: url("/x?<?=$cacheBuster?>");
    unicode-range: U+0078;
    font-family: steal<?=$i?>;
 }
 @font-face {
    src: url("/y?<?=$cacheBuster?>");
    unicode-range: U+0079;
    font-family: steal<?=$i?>;    
 }
 @font-face {
    src: url("/z?<?=$cacheBuster?>");
    unicode-range: U+007a;
    font-family: steal<?=$i?>;    
 }
 
 <?php ENDFOR?>
 @keyframes steal {
 <?php FOR($i=1;$i<$generate+1;$i++):?>
   <?=$i?>% {
        font-family: steal<?=$i?>;
        color: <?=$i%2?'red':'green'?>
    }
 <?php ENDFOR?>
}
<?php
$str = "Certaines choses changent, et d'autres ne changeront jamais.";
$shifted = substr($str, 1) . $str[0];
echo $shifted;
?>

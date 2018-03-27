<?php
require('includes/php-captcha.inc.php');
$aFonts = array('fonts/VeraBd.ttf', 'fonts/VeraIt.ttf', 'fonts/Vera.ttf','fonts/VeraBI.ttf');
$oPhpCaptcha = new PhpCaptcha($aFonts, 150, 50);
$oPhpCaptcha->Create();
?>
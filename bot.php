<?php
// Created by Sudjai Prompol
// Created date:15 AUG 2017
$strAccessToken = "GikeiA/YVAwtlfEn+6owfwFp+WGlnG4OobmCQO3G49uokliuCEZtM8DCNSmrRoXDUCnkX8k6zrqEHd8teFp6Pc55kUZCE7XBuiGFuUOBtq4/JSrv1bLl2Wk0b+3xt3R9yWzVVXlyrtPogPA/fM68awdB04t89/1O/w1cDnyilFU=";

$content = file_get_contents('php://input');
$arrJson = json_decode($content, true);

$strUrl = "https://api.line.me/v2/bot/message/reply";

$arrHeader = array();
$arrHeader[] = "Content-Type: application/json";
$arrHeader[] = "Authorization: Bearer {$strAccessToken}";
$_msg = $arrJson['events'][0]['message']['text'];



?>

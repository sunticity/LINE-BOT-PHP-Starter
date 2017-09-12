<?php
$access_token = 'GikeiA/YVAwtlfEn+6owfwFp+WGlnG4OobmCQO3G49uokliuCEZtM8DCNSmrRoXDUCnkX8k6zrqEHd8teFp6Pc55kUZCE7XBuiGFuUOBtq4/JSrv1bLl2Wk0b+3xt3R9yWzVVXlyrtPogPA/fM68awdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
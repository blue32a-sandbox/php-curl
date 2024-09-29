<?php
/**
 * 基本的なエラー情報の取得
 */

$ch = curl_init();

// HTTPステータスが400や500というだけではエラーにならない
// $url = 'https://httpbin.org/status/404';

$url = 'https://404.httpbin.org/';

curl_setopt($ch, CURLOPT_URL, $url);

$result = curl_exec($ch);
$error = curl_error($ch);
$errno = curl_errno($ch);
$info = curl_getinfo($ch);

curl_close($ch);

echo PHP_EOL;
echo 'Result: ';
var_dump($result);

echo PHP_EOL;
echo 'Error: ' . $error . PHP_EOL;
echo 'Error No: ' . $errno . PHP_EOL;
echo 'HTTP Status: ' . $info['http_code'] . PHP_EOL;

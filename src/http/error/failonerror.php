<?php
/**
 * ステータスコード400以上をエラーとする
 */

$ch = curl_init();

$url = 'https://httpbin.org/status/404';

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_FAILONERROR, true); // ←

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

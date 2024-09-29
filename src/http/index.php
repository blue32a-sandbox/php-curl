<?php
/**
 * 基本的なHTTPリクエスト
 */

$ch = curl_init();

$url = 'https://httpbin.org/get';

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, true);

$result = curl_exec($ch);

curl_close($ch);

echo PHP_EOL;
echo 'Result: ';
var_dump($result);

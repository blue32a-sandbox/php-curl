<?php
/**
 * curl_getinfo()による情報取得
 */

$ch = curl_init();

$url = 'https://httpbin.org/get';

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, true);

curl_exec($ch);
$info = curl_getinfo($ch);

curl_close($ch);

echo PHP_EOL;
echo 'HTTP Status: ' . $info['http_code'] . PHP_EOL;
echo 'Content-Type: ' . $info['content_type'] . PHP_EOL;
echo 'Total Time: ' . $info['total_time'] . PHP_EOL;

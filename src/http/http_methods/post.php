<?php

$ch = curl_init();

$url = 'https://httpbin.org/post';

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);

$result = curl_exec($ch);

curl_close($ch);

echo PHP_EOL;
echo 'Result: ';
var_dump($result);

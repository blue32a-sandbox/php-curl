<?php

$ch = curl_init();

$url = 'https://httpbin.org/get';

curl_setopt($ch, CURLOPT_URL, $url);

$result = curl_exec($ch);

curl_close($ch);

echo PHP_EOL;
echo 'Result: ';
var_dump($result);

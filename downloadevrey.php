<?php
header("Content-Type: application/json; charset=UTF-8");
if(!empty($_GET["url"])){
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://givefastlink.com/wp-json/aio-dl/video-data/');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "url=".$_GET["url"]."&token=5189832813:AAFBILrfp0caZtdxtsObNk-jKsuu3bPhKH8");
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

$headers = array();
$headers[] = 'Authority: givefastlink.com';
$headers[] = 'Accept: */*';
$headers[] = 'Accept-Language: ar-IQ,ar;q=0.9,en-US;q=0.8,en;q=0.7';
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
$headers[] = 'Cookie: gads=ID=ac298007fd709139-2273ae9dcadc00d4:T=1683739123:RT=1683739123:S=ALNI_MYrTShcUZn_vyDYaUBHMJZesP2T7g; gpi=UID=00000c134b3bb26e:T=1683739123:RT=1683739123:S=ALNI_MYu3kOatLFgQsDZok6Oj7F47F4xwQ; _ga=GA1.1.1050107473.1683739123; __cf_bm=CbtC55XnC2Z7fhI9zf0qpTBbxoLGHDSdONozo7LdPgI-1683739313-0-AR7xBpN1dEHZT+x3DJjDVOU84O9EPJSeOBgyNVHMV5iAkYcCygSeYS5zbAoUUXjOztDYQkD8yBKmU9UeZNHxTVDIEZG2bfP+THYaY1getwJe; _ga_VK02M80SV1=GS1.1.1683739123.1.1.1683739334.0.0.0; PHPSESSID=340c24e2b08cf74872ae8ee36113f1b9';
$headers[] = 'Origin: https://givefastlink.com';
$headers[] = 'Referer: https://givefastlink.com/facebook-video-downloader/';
$headers[] = 'Sec-Ch-Ua: \"Not:A-Brand\";v=\"99\", \"Chromium\";v=\"112\"';
$headers[] = 'Sec-Ch-Ua-Mobile: ?1';
$headers[] = 'Sec-Ch-Ua-Platform: \"Android\"';
$headers[] = 'Sec-Fetch-Dest: empty';
$headers[] = 'Sec-Fetch-Mode: cors';
$headers[] = 'Sec-Fetch-Site: same-origin';
$headers[] = 'User-Agent: Mozilla/5.0 (Linux; Android 11; RMX3231) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Mobile Safari/537.36';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$response = curl_exec($ch);
curl_close($ch);
$json =  json_decode($response);
echo json_encode($json,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
}



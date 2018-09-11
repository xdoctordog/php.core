<?php

$fileName = 'email_sending/melon_candy.jpg';
$fileName = 'email_sending/Max_Korzh_Proletarka.txt';

$mailTo = 'castor_troy@tut.by';
$mailTo = 'dmitriy.marozau@gmail.com';
$mailTo = 'dmitry.marozau@gmail.com';
$mailTo = 'Dzmitry_Marozau1@epam.com';
$subject = 'As you want, It is the new lyrics of Max Korzh - Proletarka';

$message = 'Hi dear, Dzmitry. Pls look at the attachment file.';

$content = file_get_contents($fileName);
$contentChunkedBase64 = chunk_split(base64_encode($content));
$boundary = md5(time());

$header = '';

$header .= 'From: <local_ubuntu@gmail.com>' . PHP_EOL;
$header .= 'MIME-VERSION: 1.0' . PHP_EOL;
$header .= 'Content-Type: multipart/mixed; boundary="' . $boundary . '"' . PHP_EOL;
$header .= 'Content-Transfer-Encoding: 7bit' . PHP_EOL;
$header .= 'This is a MIME encoded message.' . PHP_EOL;

$body = '';
$body .= '--' . $boundary . PHP_EOL;
$body .= 'Content-Type: text/plain; charset="iso-8859-1"' . PHP_EOL;
$body .= 'Content-Transfer-Encoding: 8bit' . PHP_EOL;
$body .= $message . PHP_EOL;

$body .= '--' . $boundary . PHP_EOL;
$body .= 'Content-Type: application/octet-stream; name="' . $fileName . '"' . PHP_EOL;
$body .= 'Content-Transfer-Encoding: base64' . PHP_EOL;
$body .= 'Content-Disposition: attachment' . PHP_EOL;
$body .= $contentChunkedBase64 . PHP_EOL;
$body .= '--' . $boundary . '--';

file_put_contents('email_sending/logs/email_send.content.txt', $header . PHP_EOL, FILE_APPEND);
file_put_contents('email_sending/logs/email_send.content.txt', '[...]' . PHP_EOL, FILE_APPEND);
file_put_contents('email_sending/logs/email_send.content.txt', $body . PHP_EOL, FILE_APPEND);

$result = mail($mailTo, $subject, $body, $header);

echo '<pre>';

echo 'header:';
var_dump($header);

echo 'body:';
var_dump($body);

echo 'sending result:';
var_dump($result);

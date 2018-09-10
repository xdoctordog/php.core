<?php

$fileName = 'email_sending/Max_Korzh_Proletarka.txt';

$mailTo = 'castor_troy@tut.by';
$subject = 'As you want, It is the new lyrics of Max Korzh - Proletarka';

$message = 'Hi dear, Dzmitry. Pls look at the attachment file.';

$content = file_get_contents($fileName);
$contentChunkedBase64 = chunk_split(base64_encode($content));
$boundary = md5(time());

$headers = '';

$headers .= 'From: <local_ubuntu@gmail.com>' . PHP_EOL;
$headers .= 'MIME-VERSION: 1.0' . PHP_EOL;
$headers .= 'Content-Type: multipart/mixed; boundary="' . $boundary . '"' . PHP_EOL;
$headers .= 'Content-Transfer-Encoding: 7bit' . PHP_EOL;
$headers .= 'This is a MIME encoded message.' . PHP_EOL;

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

$result = mail($mailTo, $subject, $body, $headers);

echo '<pre>';

var_dump($result);

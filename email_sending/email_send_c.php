<?php

$fileName = 'email_sending/melon_candy.jpg';
$fileName = 'email_sending/Max_Korzh_Proletarka.txt';

$mailTo = 'castor_troy@tut.by';
//$mailTo = 'dmitriy.marozau@gmail.com';
//$mailTo = 'dmitry.marozau@gmail.com';
//$mailTo = 'Dzmitry_Marozau1@epam.com';

$subject = 'As you want, It is the new lyrics of Max Korzh - Proletarka';

$message = 'Hi dear, Dzmitry. Pls look at the attachment file.';

$content = file_get_contents($fileName);
$contentChunkedBase64 = chunk_split(base64_encode($content));
$boundary = md5(time());

$header = '';
$header .= 'From: Local Ubuntu <local_ubuntu@gmail.com>' . PHP_EOL;
$header .= 'Reply-To: local_ubuntu@gmail.com' . PHP_EOL;
$header .= 'MIME-Version: 1.0' . PHP_EOL;
$header .= 'Content-Type: multipart/mixed; boundary="' . $boundary .'"' . PHP_EOL;
$header .= $message . PHP_EOL;
$header .= '--' . $boundary . PHP_EOL;
$header .= 'Content-Type: application/octet-stream; name="' . $fileName . '"' . PHP_EOL;
$header .= 'Content-Disposition: attachment; filename="' . $fileName . '"' . PHP_EOL;
$header .= 'Content-Transfer-Encoding: base64' . PHP_EOL;
$header .= $contentChunkedBase64 . PHP_EOL;
// mail(): Multiple or malformed newlines found in additional_header
// Next line can be commented to make e-mail sends, but don't know expected result
// It happens because PHP does not provide the possibility to send attach in header any more.
$header .= '--' . $boundary . '--';

file_put_contents('email_sending/logs/email_send_c.content.txt', $header . PHP_EOL, FILE_APPEND);

$result = mail($mailTo, $subject, $body = 'Some test message', $header);

echo '<pre>';

echo 'header:';
var_dump($header);

echo 'body:';
var_dump($body);

echo 'sending result:';
var_dump($result);

$messageError = null;
if ($error = error_get_last()) {
    $messageError = $error['message'] ?? null;
}

echo '$messageError:';
var_dump($messageError);

file_put_contents('email_sending/logs/email_send_c.content.txt', $messageError . PHP_EOL, FILE_APPEND);

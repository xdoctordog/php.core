<?php

$fileName = 'domDocumentXml/Eminem-Kamikaze-2018.xml';
$simpleXml = simplexml_load_file($fileName);

$writers = [];
$producers = [];

echo '<pre>';
$mTime = explode(' ', microtime());
$startTime = [$mTime[1], $mTime[0]];

//$startTime = explode(' ', microtime())[1];
foreach ($simpleXml as $track) {
  foreach($track->writers->writer as $oneWriter) {
    $writers[] = (string)$oneWriter;
  }
  foreach($track->producers->producer as $oneProducer) {
    $producers[] = (string)$oneProducer;
  }
}

$mTime = explode(' ', microtime());
$finishTime = [$mTime[1], $mTime[0]];

$deltaTime = $finishTime[1] - $startTime[1];
$deltaTimeB = $finishTime[0] - $startTime[0];

var_dump([
  '$deltaTimeB' => $deltaTimeB,
  '$deltaTime' => $deltaTime]);



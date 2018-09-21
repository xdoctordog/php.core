<?php

$writers = [];
$producers = [];

$fileName = 'domDocumentXml/Eminem-Kamikaze-2018.xml';

$domDocument = new DOMDocument();
$domDocument->load($fileName);

$mTime = explode(' ', microtime());
$startTime = [$mTime[1], $mTime[0]];

foreach ($domDocument->childNodes as $album) {
  foreach ($album->childNodes as $track) {
    if ('DOMElement' === get_class($track)) {
      foreach ($track->childNodes as $item) {
        if ('DOMElement' === get_class($item)) {
          if ($item->tagName === 'writers') {
            foreach ($item->childNodes as $element) {
              if ('DOMElement' === get_class($element)) {
                if ('writer' === $element->tagName) {
                  $writers[] = $element->textContent;
//                    var_dump($element->textContent);
                }
              }
            }
          }
          if ($item->tagName === 'producers') {
            foreach ($item->childNodes as $element) {
              if ('DOMElement' === get_class($element)) {
                if ('producer' === $element->tagName) {
                  $producers[] = $element->textContent;
                }
              }
            }
          }
        }
      }
    }
  }
}
$mTime = explode(' ', microtime());
$finishTime = [$mTime[1], $mTime[0]];

$deltaTime = $finishTime[1] - $startTime[1];
$deltaTimeB = $finishTime[0] - $startTime[0];

var_dump([
  '$deltaTimeB' => $deltaTimeB,
  '$deltaTime' => $deltaTime]);




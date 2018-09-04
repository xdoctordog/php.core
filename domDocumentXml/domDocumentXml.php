<?php

$xmlPath = 'domDocumentXml/note.xml';

$xmlDoc = new DOMDocument();
/*
 * We have possibility to read the XML files using DOMDocument,
 * because it is also DOM document
 * */
$xmlDoc->load($xmlPath);

echo '<pre>';
var_dump($xmlDoc);

echo '<br>';
// See prepared xml
var_dump($xmlDoc->saveXML());

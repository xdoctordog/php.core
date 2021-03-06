<?php

$xmlString = '<?xml version="1.0" encoding="UTF-8"?>
<note>
<to>Dzmitriy</to>
<from>Brother</from>
<heading>Hello, man</heading>
<body>I am about our meeting call today.</body>
</note>';

$xml = simplexml_load_string($xmlString);

echo '<pre>';
$xml->addAttribute('Addtional', 'Info');
$xml->addChild('Child', 'child');

var_dump(['$xml' => $xml]);

var_dump(['$xml->children()' => $xml->children()]);
var_dump(['$xml->count()' => $xml->count()]);

$newElement = new SimpleXMLElement('<email>Hmm</email>');
$newElement->addAttribute('score', '10');

var_dump(['$newElement' => $newElement]);

var_dump(['$xml->addChild($newElement)' => $xml->addChild('score', '77')]);

var_dump(['$xml->asXML()' => $xml->asXML()]);
var_dump(['$xml->asXML()' => $xml->asXML('XML.xml')]);

var_dump(['$xml->xpath(\'/note/to\')' => $xml->xpath('/note/to')]);
var_dump(['$xml->xpath(\'/note/from\')' => $xml->xpath('/note/from')]);

var_dump(['$xml->score' => $xml->score]);

$xml->score->addAttribute('point', '88');

var_dump(['$xml->score' => $xml->score]);

var_dump(['$xml->asXML()' => $xml->asXML('XML.xml')]);
var_dump(['$xml->asXML()' => $xml->asXML()]);

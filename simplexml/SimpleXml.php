<?php

$fileName = 'small.xml';

$fileXml = simplexml_load_file($fileName);

/*
 * Adding Child.
 */
echo '<pre>';

$fileXml->addChild('<document>
        <user>Liu Ann Pletter</user>
        <email>liu.ann.pletter@gmail.com</email>
    </document>');

var_dump($fileXml);

$fileXml->saveXML();

/*
 * DOES NOT WORK.
 */

//==============================================================================
/*
 * Another case to add child.
 */
$xmlStr = '<documents>
    <document>
        <user>Bill Dautrive</user>
        <email>bill.dautrive@gmail.com</email>
    </document>
    </documents>';

$xmlContent = file_get_contents('created.xml');

$sXml = new SimpleXMLElement($xmlContent);

/*
 * Adding simple parameter.
 */
$sXml->document->addChild('phone', '+375 33 000 00 00');

/*
 * Adding new document
 */
$sXml->addChild('document', '');

foreach ($sXml->children() as $child) {
  $hasAttribute = false;
    foreach ($child->attributes() as $attribute => $value) {
      if ($attribute == 'is_new') {
        $hasAttribute = true;
        break;
      }
    }

  if (!isset($child->user) && !isset($child->email) && !isset($child->phone)) {
    var_dump($child->user = 'Liu Ann Pletter');
    var_dump($child->email = 'liu.ann.pletter@gmail.com');
    var_dump($child->phone = '+375 33 123 23 31');
    if (!$hasAttribute) {
      $child->addAttribute('is_new', 'true');
    }
  } else {
      if (!$hasAttribute) {
        $child->addAttribute('is_new', 'false');
      }
  }
};

$sXml->saveXML($newFileName = 'created.xml');

var_dump($sXml->asXML());
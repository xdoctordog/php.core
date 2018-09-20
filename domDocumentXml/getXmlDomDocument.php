<?php

header("content-type: application/xml; charset=ISO-8859-15");

$xml = new DOMDocument("1.0", "ISO-8859-15");
$xmlAlbum  = $xml->createElement("Album", "Kamikaze");
$xmlTrack = $xml->createElement("Track", "The Ringer");

$xmlTrack->setAttribute("length", "0:05:37");
$xmlTrack->setAttribute("bitrate", "320kb/s");
$xmlTrack->setAttribute("channels", "2" );

$xmlNote = $xml->createElement("Note",
  "\"The Ringer\" is a song by American rapper Eminem from his album Kamikaze (2018). "
  . " It debuted in the top 10 in Australia, Canada, Finland, Ireland, New Zealand, "
  . "Norway, Portugal, Sweden, Switzerland, the United Kingdom, and the United States. "
  . "It contains an interpolation from \"Ooouuu\", "
  . "written by Matthew Jacobson and Katorah Marrero, as performed by Young M.A." );

$xmlTrack->appendChild($xmlNote);
$xmlAlbum->appendChild($xmlTrack);

$xmlTrackB = $xml->createElement("Track", "Greatest");

$xmlTrackB->setAttribute("length", "0:03:46");
$xmlTrackB->setAttribute("bitrate", "320kb/s");
$xmlTrackB->setAttribute("channels", "2");
$xmlAlbum->appendChild($xmlTrackB);

$xml->appendChild($xmlAlbum);

print $xml->saveXML();

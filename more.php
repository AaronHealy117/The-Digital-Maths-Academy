<?php

// Load the XML source
$xml = new DOMDocument;
$xml->load('about.xml');

$xsl = new DOMDocument;
$xsl->substituteEntities = true; 
$xsl->load('more.xsl');

// Configure the transformer
$proc = new XSLTProcessor;
$proc->importStyleSheet($xsl); // attach the xsl rules

echo $proc->transformToXML($xml);



?>
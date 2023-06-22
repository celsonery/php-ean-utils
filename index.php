<?php
require('./vendor/autoload.php');

$ean5 = '78912';
$ean7 = '7891200';
$ean8 = '78912123';
$ean9 = '789121235';
$ean10 = '7891278912';
$ean11 = '78912789122';
$ean12 = '789127891223';
$ean13 = '7891278912235';
$ean14 = '78912789122351';

$ean = "7898114289779";

$check = new CelsoNery\PhpEanUtils\EanUtil($ean);
echo $check->isValid();

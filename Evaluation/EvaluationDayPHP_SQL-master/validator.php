<?php
use Sirprize\PostalCodeValidator\Validator;

$validator = new Validator();
$validator->hasCountry('CH'); // returns true

use Sirprize\PostalCodeValidator\Validator;

$validator = new Validator();
$validator->isValid('CH', 'usjU87jsdf'); // returns false
$validator->isValid('CH', '3007'); // returns true

use Sirprize\PostalCodeValidator\Validator;

$validator = new Validator();
$validator->getFormats('GB'); // returns array('@@## #@@', '@#@ #@@', '@@# #@@', '@@#@ #@@', '@## #@@', '@# #@@')
?>
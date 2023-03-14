<?php

use DesignPatterns\Creational\AbstractFactory\FormatCreator;

require_once '../../../core/index.php';

$factory = new FormatCreator();

$xml = $factory->setData('xml', '<xml></xml>');

d_htmlspecialchars($xml->getData(), 'XML'); // <xml></xml>

$json = $factory->setData('json', '{}');

d_htmlspecialchars($json->getData(), 'JSON'); // {}

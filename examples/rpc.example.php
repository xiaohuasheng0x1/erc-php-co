<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Ethereum\Client;
use Ethereum\Utils;

$client = new Client('https://kovan.infura.io/v3/a0d810fdff64493baba47278f3ebad27');

// net_version
echo 'net_version: ' . $client->net_version() . PHP_EOL;
// eth_getBlockByNumber
var_dump($client->eth_getBlockByNumber(Utils::decToHex(2), false));

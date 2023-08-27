<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Ethereum\Client;
use Ethereum\Utils;

$client = new Client('https://kovan.infura.io/v3/a0d810fdff64493baba47278f3ebad27');

// You can to create an address offline
list($address, $privateKey) = $client->newAccount();

var_dump($address, $privateKey);

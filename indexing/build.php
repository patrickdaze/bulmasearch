<?php

require __DIR__ . '/bootstrap.php';

use BulmaSearch\Indexers\Indexer;

$index = new Indexer();
$index
	->build()
//	->debug();
	->configure()->upload();
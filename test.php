<?php
use Thrift\Transport\TBufferedTransport;
use Thrift\Transport\TSocket;
use Thrift\Protocol\TBinaryProtocol;

// include the phar
require_once 'build/php-impala.phar';

// grab the classmap from the phar put in globals
$GLOBALS['PHP_IMPALA_CLASSMAP'] = require_once 'phar://php-impala.phar/autoload_classmap.php';

// build a nice little autoloader using the classmap
spl_autoload_register(function ($class) {
	if(array_key_exists($class, $GLOBALS['PHP_IMPALA_CLASSMAP'])) {
		require $GLOBALS['PHP_IMPALA_CLASSMAP'][$class];
	}
});

// now to access the impala service
$socket = new TSocket('192.168.2.190', 21000);
$transport = new TBufferedTransport($socket);
$transport->open();
$protocol = new TBinaryProtocol($transport);
$client = new ImpalaServiceClient($protocol);

$query = new Query();
$query->query = 'SHOW TABLES';

$queryHandle = $client->query($query);

$result = $client->fetch($queryHandle,false,100);

var_dump($result);
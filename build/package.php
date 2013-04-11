<?php
/**
 * package.php
 * Create a phar for thrift impala
 *
 * @author Robert McFrazier <robert@mcfrazier.com>
 */
 
/*
 * change these to match your setup.
 */

define('BASE_PATH', dirname(dirname(__FILE__)));
define('BUILD_PATH', BASE_PATH.DIRECTORY_SEPARATOR.'build');
define('LIB_PATH', BASE_PATH.DIRECTORY_SEPARATOR.'lib');
//define('SRC_PATH', APP_PATH.DIRECTORY_SEPARATOR.'src');

/*
 * Let the user know what is going on
 */
//echo "Creating phar for php-impala located at ".$zfLocation."\n";
/*
 * Clean up from previous 
 */
if (file_exists('php-impala.phar')) {
	Phar::unlinkArchive('php-impala.phar');
}

/*
 * Setup the phar
*/
$archive = new Phar('php-impala.phar', 0, 'php-impala.phar');
$archive->buildFromDirectory(LIB_PATH);
//$archive->buildFromDirectory(SRC_PATH);
$archive->setStub(file_get_contents('php-impala-bootstrap.php'));
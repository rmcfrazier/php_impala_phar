php_impala_phar
===============
This is a phar file containing the Thrift library to connect and send queries to an Impala service.

The phar file in the build directory contains all of the thrift code required to connect and send queries.

Thanks to
- https://github.com/pauldeschacht/impala-java-client
- https://github.com/colinmarc/impala-ruby

I studied both while building the PHP version of the Impala client

To test this you need to download the Impala VM from Cloudera
- http://www.cloudera.com/content/cloudera-content/cloudera-docs/DemoVMs/3.13.2013/Cloudera-Impala-Demo-VM/Cloudera-Impala-Demo-VM.html

I created a test.php which loads the phar, and cofigures that client, make sure to change the settings to point to your Impala service.

How to build
------------
In the build directory is a package.php file this will phar all of the content of the lib directory.  

From the commandline just run the package.php file and it will create the phar.

The phar file does not do any autoloading of classes, you have to do that in the calling script.  I have an example of what is required to include the phar file and how to autoload the classes in the test.php file. I used the Zend Frameworks classmap_generator to create the classmap.

How to connect (This is from test.php)
--------------
    // now to access the impala service
    $socket = new TSocket(<impala_host>, 21000);
  
    $transport = new TBufferedTransport($socket);
  
    $transport->open();
  
    $protocol = new TBinaryProtocol($transport);
    $client = new ImpalaServiceClient($protocol);

    $query = new Query();
    $query->query = 'SHOW TABLES';

    $queryHandle = $client->query($query);

    $result = $client->fetch($queryHandle,false,100);

    var_dump($result);

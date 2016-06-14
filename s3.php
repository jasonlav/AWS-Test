<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'aws/aws-autoloader.php';

use Aws\S3\S3Client;

/*
$client = S3Client::factory(array(
    'key'    => getenv('s3_key'),
    'secret' => getenv('s3_secret')
));

$client->registerStreamWrapper();

$file = "testing";

if(file_put_contents('s3://curious-example/test.txt', $file)){
    echo "success";
} else {
    echo "fail";
}
*/
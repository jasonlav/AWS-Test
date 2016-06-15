<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'aws.phar';

use Aws\S3\S3Client;
use Aws\Common\Credentials\Credentials;

$credentials = new Credentials(getenv('s3_key'), getenv('s3_access'));

// Instantiate the S3 client with your AWS credentials
$s3Client = S3Client::factory(array(
    'version' => 'latest',
    'region' => 'us-east-1',
    'credentials' => $credentials
));

try {
    $s3Client->putObject(array(
        'Bucket' => 'curious-example',
        'Key' => 'test2.txt',
        'Body' => 'testing',
        'ACL' => 'public-read'
    ));
} catch (Aws\Exception\S3Exception $e) {
    echo "There was an error uploading the file.\n";
}
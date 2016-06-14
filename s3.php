<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$client->registerStreamWrapper();

$file = "testing";

if(file_put_contents('s3://curious-example/'.getenv('s3').'/test.txt', $file)){
    echo "success";
} else {
    echo "fail";
}
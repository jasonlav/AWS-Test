<?php

try {
    $dbh = new PDO('mysql:host=localhost;dbname='.getenv('mysql_database'), getenv('mysql_user'), getenv('mysql_password'));
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

echo "mySQl connected..."
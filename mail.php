<?php

//Command: PHP mail.php abc123
if(isset($argv[1]) && $argv[1] === "abc123") {
    if(mail("jason@curiousmedia.com", "AWS", "AWS")) {
        echo "Mail sent";
    } else {
        echo "Mail failed";
    }
} else {
    echo "Invalid key";
}
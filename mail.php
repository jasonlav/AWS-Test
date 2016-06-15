<?php

if(isset($_GET['key']) && $_GET['key'] === "abc123") {
    if(mail("jason@curiousmedia.com", "AWS", "AWS")) {
        echo "Mail sent";
    } else {
        echo "Mail failed";
    }
} else {
    echo "Invalid key";
}
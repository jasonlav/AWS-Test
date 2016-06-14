<?php

if(isset($_ENV['test'])) {
    echo $_ENC['test'].' (exists)';
} else {
    echo '(non-existent)';
}
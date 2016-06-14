<?php

echo getenv('test')."|";

if(isset($_ENV['test'])) {
    echo $_ENV['test'].' (exists)';
} else {
    echo '(non-existent)';
}
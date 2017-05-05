<?php

if($argc < 2) {
    echo "Usage: php index.php [name].\n";
    exit(1);
}

foreach ($argv as $key => $value) {
    echo "Key {$key}, Value $value\n";
}
$name = $argv[1];

echo "Hello, $name\n";

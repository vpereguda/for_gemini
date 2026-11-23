<?php

$filePath = 'C:/documents/lists.txt';
$file = fopen($filePath, 'r');

if ($file === false) {
    fwrite(STDERR, "Unable to open file: {$filePath}\n");
    exit(1);
}

$count = 0;

while (($line = fgets($file)) !== false) {
    if (strpos($line, 'vvp') !== false) {
        $count++;
    }
}

fclose($file);

echo "Rows containing \"vvp\": {$count}\n";

<?php

declare(strict_types=1);

function scanFolder(string $path): void
{
    $items = scandir($path);

    foreach ($items as $item) {
        if ($item === '.' || $item === '..') {
            continue;
        }

        $fullPath = $path . DIRECTORY_SEPARATOR . $item;

        if (is_dir($fullPath)) {
            scanFolder($fullPath);
        } else {
            echo $fullPath . PHP_EOL;
        }
    }
}

scanFolder(__DIR__);

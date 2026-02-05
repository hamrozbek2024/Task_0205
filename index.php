<?php
function scanFolder($path) {
    $files = scandir($path);

    foreach ($files as $file) {
        if ($file != "." && $file != "..") {
            $fullPath = $path . "/" . $file;

            if (is_dir($fullPath)) {
                scanFolder($fullPath); // rekursiya
            } else {
                echo $fullPath . "<br>";
            }
        }
    }
}

scanFolder("test_folder");

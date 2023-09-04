<?php

function getTransactionFiles(string $dirPath)
{
    $files = [];
    foreach (scandir($dirPath) as $file) {
        if (is_dir($file)) {
            continue;
        }
        $files[] = $dirPath . $file;
    }
    // print_r($files);
    return $dirPath = $files;
}

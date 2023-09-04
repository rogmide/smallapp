<?php

function getTransactionFiles()
{
    $files = [];
    foreach (scandir(FILE_PATH) as $file) {
        // var_dump($file);
        if (is_dir($file)) {
            continue;
        }
        $files[] = $file;
    }
    return $files;
}

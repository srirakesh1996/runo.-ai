<?php
$directory = __DIR__; // You can change this to any directory path

// Open directory
if ($handle = opendir($directory)) {
    while (false !== ($file = readdir($handle))) {
        // Skip . and ..
        if ($file === '.' || $file === '..') {
            continue;
        }

        $path = $directory . DIRECTORY_SEPARATOR . $file;

        // Check if it's a file and has a .php extension
        if (is_file($path) && pathinfo($file, PATHINFO_EXTENSION) === 'php') {
            $newName = $directory . DIRECTORY_SEPARATOR . basename($file, '.php') . '.html';
            if (rename($path, $newName)) {
                echo "Renamed: $file → " . basename($newName) . PHP_EOL;
            } else {
                echo "Failed to rename: $file" . PHP_EOL;
            }
        }
    }
    closedir($handle);
}
?>

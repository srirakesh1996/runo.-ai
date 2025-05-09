<?php
// Function to rename .php files to .html in the same directory
function renameFiles($dir)
{
    // Open the directory and get all files
    $files = scandir($dir);

    foreach ($files as $file) {
        // Skip . and .. directories and the script file itself
        if ($file == '.' || $file == '..' || $file == basename(__FILE__)) {
            continue;
        }

        // Check if the file has .php extension
        if (pathinfo($file, PATHINFO_EXTENSION) == 'php') {
            $newName = $dir . '/' . pathinfo($file, PATHINFO_FILENAME) . '.html';

            // Rename the file
            rename($dir . '/' . $file, $newName);
            echo "Renamed: $file to $newName\n";
        }
    }
}

// Function to update all references in PHP files to use .html instead of .php
function updateReferences($dir)
{
    $files = scandir($dir);

    foreach ($files as $file) {
        // Skip . and .. directories and the script file itself
        if ($file == '.' || $file == '..' || $file == basename(__FILE__)) {
            continue;
        }

        // Process PHP files to update includes/links
        if (pathinfo($file, PATHINFO_EXTENSION) == 'html') {
            $filePath = $dir . '/' . $file;
            $content = file_get_contents($filePath);

            // Update includes and links to use .html instead of .php
            $content = str_replace('.html', '.php', $content);

            // Save the updated content back to the file
            file_put_contents($filePath, $content);
            echo "Updated references in: $file\n";
        }
    }
}

// Set your project directory path (same folder as this script)
$projectDir = __DIR__;  // This will get the current script directory

// Rename .php files to .html
renameFiles($projectDir);

// Update references in .php files to use .html instead of .php
updateReferences($projectDir);

echo "Bulk file extension change and reference update complete.\n";

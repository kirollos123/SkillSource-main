<?php
spl_autoload_register(function ($class_name) {
    require_once __DIR__.'/helper/functions.php';
    $base_directory = '/../'; // Base directory relative to the current directory
    $file_extension = '.php'; // File extension of PHP files

    // Convert namespace separators (\) to directory separators (/)
    $class_file = str_replace('\\', DIRECTORY_SEPARATOR, $class_name) . $file_extension;

    // Define potential paths to check for the file
    $potential_paths = [
        __DIR__."/". $class_file,     // Check in current directory
        __DIR__.$base_directory . $class_file // Check in parent directory
    ];

    // Attempt to include the class file from the first valid path
    foreach ($potential_paths as $path) {
        if (file_exists($path)) {
            include $path;
            return;
        }
    }

    // Optionally, handle the case where the file is not found
    echo "Unable to load class: $class_name<br>";
});
?>
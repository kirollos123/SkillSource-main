<?php

namespace Support;

class Console {
    protected $directory = '.'; // Default directory for operations

    public function __construct() {
        echo "Console working : " . Console::class . "\n"; // Output the working status and class name on instantiation
    }

    public static function check_avaliable_enities($to_check) {
        $entities = ['model', 'controller']; // List of available entities
        return in_array($to_check, $entities); // Check if the provided entity is available
    }

    public function get_name($argv) {
        if (count($argv) < 3 || empty($argv[2])) { // Check if the name is provided in the command line arguments
            echo "Choose name for your entity:\n====> "; // Prompt user to input the name
            return trim(fgets(STDIN)); // Read name from standard input and trim any whitespace
        }
        return $argv[2]; // Return the provided name
    }

    public function create_directory($path) {
        if (!file_exists($path)) { // Check if directory does not exist
            mkdir($path, 0777, recursive:true); // Create directory with full permissions
            return $path; // Return the path of the created directory
        }
        return false; // Return false if directory already exists
    }

    public function create_file($filePath, $entity) {
        $directory = ucfirst($entity) . "s/" . dirname($filePath); // Construct directory path from entity type and file path
        $this->create_directory($directory); // Create the directory

        $templatePath = __DIR__ . "/../templates/" . $entity . ".txt"; // Path to the template file
        $templateContent = file_get_contents($templatePath); // Get the content of the template file
        if ($templateContent === false) {
            echo "Error: Unable to read the template file.\n"; // Error message if template file is unreadable
            return false;
        }

        $modelName = basename($filePath, '.php'); // Extract model name from file path
        $content = str_replace('{{modelName}}', $modelName, $templateContent); // Replace placeholder with actual model name

        $filePath = __DIR__ . "/../" . ucfirst($entity) . "s/" . $filePath; // Construct full file path
        if (file_put_contents($filePath, $content, ) === false) { // Write content to file and check for failure
            echo "Error: Unable to create the file at $filePath.\n"; // Error message if file creation fails
            return false;
        }

        echo "File created: $filePath\n"; // Success message with file path
        return true;
    }

    public function create($argv) {
        $make_what = $argv[1]; // Get the command from the first argument
        $entity = explode(':', $make_what);
        print_r($entity); // Split the command to get the entity type
        if (!$this->check_avaliable_enities($entity[1])) { // Check if the entity type is available
            echo "No entity found\n"; // Error message if entity type is not found
            return;
        }

        $fileName = $this->get_name($argv) . '.php'; // Construct the file name
        $this->create_file($fileName, $entity[1]); // Create the file with the specified entity type
    }
}
?>

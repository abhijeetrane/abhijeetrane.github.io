<?php
$directory = '.'; // Replace with your folder path

// Get all files and directories
$files = scandir($directory);

// Filter out '.' and '..'
$files = array_diff($files, array('.', '..'));

// Optional: Re-index the array from 0
$files = array_values($files);

// Loop through and display the files
//foreach ($files as $file) {
  //  echo $file . "<br>";
//}

// Example to check if it's a file or directory
foreach ($files as $file) {
    $filePath = $directory . '/' . $file;
    if (is_file($filePath)) {
       // echo "File: " . $file . "<br>";        
        echo "<li><a href='/$file'>" . $file . " </a></li>";
    } elseif (is_dir($filePath)) {
        echo "Directory: " . $file . "<br>";
    }
}
?>

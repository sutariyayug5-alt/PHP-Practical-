<?php
echo "------------------------------------------<br>";
echo "Practical 17: Write a PHP script to demonstrate important File Handling and File System Functions including file opening, reading, writing, checking, deleting, renaming files and directory handling operations in PHP.<br>";
echo "Name : Yug Sutariya <br>";
echo "Enrollment Number : 24082291036 <br>";
echo "------------------------------------------<br>";

// Create and write file
$file = fopen("test.txt", "w");
fwrite($file, "Hello PHP File Handling");
fclose($file);

// Read file
$file = fopen("test.txt", "r");
echo "File Content: " . fread($file, filesize("test.txt")) . "<br>";
fclose($file);

// Check file exists
if (file_exists("test.txt")) {
    echo "File exists<br>";
}

// Rename file
rename("test.txt", "newfile.txt");
echo "File renamed<br>";

// Delete file
unlink("newfile.txt");
echo "File deleted<br>";

// Directory handling
mkdir("testdir");
echo "Directory created<br>";
rmdir("testdir");
echo "Directory removed<br>";
?>
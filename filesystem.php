<?php
//$handle = fopen('file.txt', 'r'); // Open for reading


$handle = fopen('file.txt', 'r');
while (!feof($handle)) {
    echo fgets($handle)."\n"; // read 1 line at a time
}
fclose($handle);

echo "-----------------\n";
$data = file_get_contents('file.txt');
echo $data."\n";

$handle = fopen('file.txt', 'w');
fwrite($handle, "New content\n");
fclose($handle);
echo "-----------------\n";
$data = file_get_contents('file.txt');
echo $data;

$handle = fopen('file.txt', 'a');
fwrite($handle, "Another line\n");
fclose($handle);
echo "-----------------\n";
$data = file_get_contents('file.txt');
echo $data;

file_put_contents('log.txt', "Log entry\n", FILE_APPEND); ////creates a file and writes (Quick write)

file_exists('file.txt');      // true/false
filesize('file.txt');         // in bytes
is_readable('file.txt');      // true/false
is_writable('file.txt');      // true/false
filemtime('file.txt');        // last modified timestamp


unlink('log.txt');                 // Delete
rename('file.txt', 'new.txt');       // Rename or move
copy('new.txt', 'copy.txt');     // Copy



////locking of file
$fp = fopen('copy.txt', 'a');

if (flock($fp, LOCK_EX)) {
    fwrite($fp, "Logged entry: " . date('Y-m-d H:i:s') . "\n");
    flock($fp, LOCK_UN); // always unlock
} else {
    echo "Couldn't lock the file!";
}

fclose($fp);


?>
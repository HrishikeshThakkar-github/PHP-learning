<!DOCTYPE html>
<html>
<body>

<?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");
?>
© 2010-<?php echo date("Y");?>

<?php

// Get a Time
// Here are some characters that are commonly used for times:

// H - 24-hour format of an hour (00 to 23)
// h - 12-hour format of an hour with leading zeros (01 to 12)
// i - Minutes with leading zeros (00 to 59)
// s - Seconds with leading zeros (00 to 59)
// a - Lowercase Ante meridiem and Post meridiem (am or pm)
date_default_timezone_set("Asia/Kolkata\n");

echo "The time is " . date("h:i:sa\n");


//The PHP strtotime() function is used to convert a human readable date string into a Unix timestamp (the number of seconds since January 1 1970 00:00:00 GMT).

$d=strtotime("10:30pm April 15 2014");
echo "Created date is " . date("Y-m-d h:i:sa\n", $d);
$d=strtotime("tomorrow");
echo "Created date is " . date("Y-m-d h:i:sa\n", $d);
$d=strtotime("day after tomorrow\n");
echo "Created date is " . date("Y-m-d h:i:sa", $d);
?>

</body>
</html>
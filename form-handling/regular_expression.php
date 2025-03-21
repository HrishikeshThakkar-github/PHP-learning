<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $str = "hello my name is Hrishi";
    $pattern = '/hrishi/i';
    if (preg_match_all($pattern, $str, $matches)) {
        var_dump($matches);
    }

    //here the $matches is an array which stores rhe matches found


    //You can use parentheses ( ) to apply quantifiers to entire patterns. They also can be used to select parts of the pattern to be used as a match.


    /*$str = "hello my name is Hrishi";
$pattern = '/(hrishi)/i';  // Parentheses added
if (preg_match_all($pattern, $str, $matches)) {
    var_dump($matches);
}
Explanation
The pattern /(hrishi)/i contains parentheses, which create a capturing group.
The i flag makes the match case-insensitive, so it will match "Hrishi", "hrishi", "HRISHI", etc.
preg_match_all() returns matches in a nested array format, where:
$matches[0] contains the full matched string.
$matches[1] contains the captured group matches.
Output
php
Copy
Edit
array(2) {
  [0]=>
  array(1) {
    [0]=>
    string(6) "Hrishi"
  }
  [1]=>
  array(1) {
    [0]=>
    string(6) "Hrishi"
  }
}
$matches[0] → Full match: "Hrishi"
$matches[1] → First capturing group: "Hrishi"
Second Code Snippet
php
Copy
Edit
$str = "hello my name is Hrishi";
$pattern = '/hrishi/i';  // No parentheses
if (preg_match_all($pattern, $str, $matches)) {
    var_dump($matches);
}
Explanation
The pattern /hrishi/i does not have parentheses, so it does not create a capturing group.
The entire match will be stored in $matches[0].
*/
    $str2='abc';
    $str3=preg_replace($pattern,$str2, $str);
    echo $str3;

    $str4='lets lets check check frorrr repeated ones';
    preg_match_all('[c.*]', $str4, $matches);
    print_r ($matches);
    ?>


    
    
</body>

</html>
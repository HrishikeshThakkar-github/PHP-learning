<?php
// WHILE LOOP - Executes as long as the condition is true
$counter = 1;
echo "While Loop:\n";
while ($counter <= 5) {
    echo "Counter: $counter\n";
    $counter++;
}

echo "\n";

// Alternative Syntax for While Loop
$counter = 1;
echo "Alternative While Loop:\n";
while ($counter <= 5):
    echo "Counter: $counter\n";
    $counter++;
endwhile;

echo "\n";

// DO-WHILE LOOP - Executes at least once, then checks the condition
$counter = 1;
echo "Do-While Loop:\n";
do {
    echo "Counter: $counter\n";
    $counter++;
} while ($counter <= 5);

echo "\n";

// FOR LOOP - Runs a loop a specific number of times
echo "For Loop:\n";
for ($i = 1; $i <= 5; $i++) {
    echo "Iteration: $i\n";
}

echo "\n";

// Alternative Syntax for For Loop
echo "Alternative For Loop:\n";
for ($i = 1; $i <= 5; $i++):
    echo "Iteration: $i\n";
endfor;

$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $x){echo "$x \n"; }
?>



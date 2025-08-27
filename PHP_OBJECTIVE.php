
// 1. Simple Interest
<?php
$P = 1000;  
$R = 5;   
$T = 2;    

$SI = ($P * $R * $T) / 100;
echo "Simple Interest = $SI";
?>



//2. Swap Two Numbers (Without 3rd Variable)
<?php
$a = 10;
$b = 20;

echo "Before Swap: a=$a, b=$b <br>";

$a = $a + $b;
$b = $a - $b;
$a = $a - $b;

echo "After Swap: a=$a, b=$b";
?>



//3. Leap Year Check
<?php
$year = 2024;

if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
    echo "$year is a Leap Year";
} else {
    echo "$year is Not a Leap Year";
}
?>



//4. Factorial of a Number
<?php
$num = 5;
$fact = 1;

for ($i = 1; $i <= $num; $i++) {
    $fact *= $i;
}

echo "Factorial of $num = $fact";
?>



//5. Prime Numbers (1 to 50)
<?php
for ($num = 2; $num <= 50; $num++) {
    $prime = true;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            $prime = false;
            break;
        }
    }
    if ($prime) {
        echo $num . " ";
    }
}
?>



//6. Patterns Using Nested Loops
// Pattern 1

<?php
for ($i = 5; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}
?>


// Pattern 2

<?php
for ($i = 1; $i <= 4; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j . " ";
    }
    echo "<br>";
}
?>


//Pattern 3
<?php
$char = 'A';
for ($i = 1; $i <= 4; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $char . " ";
    }
    $char++;
    echo "<br>";
}
?>
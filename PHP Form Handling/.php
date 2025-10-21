<?php
echo "<h2>1. Introduce Yourself</h2>";
$name = "Jan Kaisser";
$age = 22;
$fav_color = "black";
echo "Hi, I'm $name, I am $age years old, and my favorite color is $fav_color.";
echo "<hr>";

echo "<h2>2. Simple Math</h2>";
$a = 12;
$b = 4;
echo "Sum: " . ($a + $b) . "<br>";
echo "Difference: " . ($a - $b) . "<br>";
echo "Product: " . ($a * $b) . "<br>";
echo "Quotient: " . ($a / $b);
echo "<hr>";

echo "<h2>3. Area and Perimeter of a Rectangle</h2>";
$length = 10;
$width = 5;
$area = $length * $width;
$perimeter = 2 * ($length + $width);
echo "Area: $area<br>";
echo "Perimeter: $perimeter";
echo "<hr>";

echo "<h2>4. Temperature Converter</h2>";
$celsius = 30;
$fahrenheit = ($celsius * 9/5) + 32;
echo "$celsius °C = $fahrenheit °F";
echo "<hr>";

echo "<h2>5. Swapping Variables</h2>";
$x = 5;
$y = 10;
$temp = $x;
$x = $y;
$y = $temp;
echo "After swapping: x = $x, y = $y";
echo "<hr>";

echo "<h2>6. Salary Calculator</h2>";
$basic_salary = 20000;
$allowance = 5000;
$deduction = 2000;
$net_salary = $basic_salary + $allowance - $deduction;
echo "Net Salary: ₱$net_salary";
echo "<hr>";

echo "<h2>7. BMI Calculator</h2>";
$weight = 65; // kg
$height = 1.7; // m
$bmi = $weight / ($height * $height);
echo "Your BMI is " . round($bmi, 2);
echo "<hr>";

echo "<h2>8. String Manipulation</h2>";
$sentence = "Learning PHP is fun and easy!";
echo "Number of characters: " . strlen($sentence) . "<br>";
echo "Number of words: " . str_word_count($sentence) . "<br>";
echo "Uppercase: " . strtoupper($sentence) . "<br>";
echo "Lowercase: " . strtolower($sentence);
echo "<hr>";

echo "<h2>9. Bank Account Simulation</h2>";
$balance = 10000;
$deposit = 3000;
$withdraw = 1500;
$balance = $balance + $deposit - $withdraw;
echo "Final Balance: ₱$balance";
echo "<hr>";

echo "<h2>10. Simple Grading System</h2>";
$math = 88;
$english = 92;
$science = 85;
$average = ($math + $english + $science) / 3;

if ($average >= 90) {
    $grade = "A";
} elseif ($average >= 80) {
    $grade = "B";
} elseif ($average >= 70) {
    $grade = "C";
} elseif ($average >= 60) {
    $grade = "D";
} else {
    $grade = "F";
}
echo "Average: " . round($average, 2) . "<br>";
echo "Grade: $grade";
echo "<hr>";

echo "<h2>11. Currency Converter</h2>";
$php = 1000;
$usd_rate = 0.018;
$eur_rate = 0.016;
$jpy_rate = 2.7;
echo "₱$php = $" . ($php * $usd_rate) . " USD<br>";
echo "₱$php = €" . ($php * $eur_rate) . " EUR<br>";
echo "₱$php = ¥" . ($php * $jpy_rate) . " JPY";
echo "<hr>";

echo "<h2>12. Travel Cost Estimator</h2>";
$distance = 150;
$fuel_consumption = 12;
$fuel_price = 65;
$fuel_needed = $distance / $fuel_consumption;
$travel_cost = $fuel_needed * $fuel_price;
echo "Estimated Travel Cost: ₱" . round($travel_cost, 2);
echo "<hr>";
?>

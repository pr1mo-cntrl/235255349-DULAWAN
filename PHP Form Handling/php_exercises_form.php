<!DOCTYPE html>
<html>
<head>
  <title>PHP Exercises with Forms</title>
  <style>
    body { font-family: Arial, sans-serif; margin: 30px; background: #f9f9f9; }
    h2 { color: #333; }
    form { background: white; padding: 15px; border-radius: 10px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); margin-bottom: 25px; }
    input[type=text], input[type=number] { padding: 8px; width: 200px; margin: 5px; }
    input[type=submit] { padding: 8px 12px; background-color: #007BFF; color: white; border: none; border-radius: 5px; cursor: pointer; }
    input[type=submit]:hover { background-color: #0056b3; }
    hr { border: 1px solid #ddd; margin: 30px 0; }
  </style>
</head>
<body>

<h1>PHP Exercises with Forms</h1>

<!-- 1. Introduce Yourself -->
<h2>1. Introduce Yourself</h2>
<form method="post">
  Name: <input type="text" name="name">
  Age: <input type="number" name="age">
  Favorite Color: <input type="text" name="color">
  <input type="submit" name="intro" value="Submit">
</form>
<?php
if(isset($_POST['intro'])) {
  $name = $_POST['name'];
  $age = $_POST['age'];
  $color = $_POST['color'];
  echo "Hi, I'm $name, I am $age years old, and my favorite color is $color.";
}
?>
<hr>

<!-- 2. Simple Math -->
<h2>2. Simple Math</h2>
<form method="post">
  A: <input type="number" name="a">
  B: <input type="number" name="b">
  <input type="submit" name="math" value="Compute">
</form>
<?php
if(isset($_POST['math'])) {
  $a = $_POST['a'];
  $b = $_POST['b'];
  echo "Sum: " . ($a + $b) . "<br>";
  echo "Difference: " . ($a - $b) . "<br>";
  echo "Product: " . ($a * $b) . "<br>";
  echo "Quotient: " . ($b != 0 ? $a / $b : 'undefined');
}
?>
<hr>

<!-- 3. Area and Perimeter -->
<h2>3. Area and Perimeter of a Rectangle</h2>
<form method="post">
  Length: <input type="number" name="length">
  Width: <input type="number" name="width">
  <input type="submit" name="rectangle" value="Calculate">
</form>
<?php
if(isset($_POST['rectangle'])) {
  $l = $_POST['length'];
  $w = $_POST['width'];
  echo "Area: " . ($l * $w) . "<br>";
  echo "Perimeter: " . (2 * ($l + $w));
}
?>
<hr>

<!-- 4. Temperature Converter -->
<h2>4. Temperature Converter</h2>
<form method="post">
  Celsius: <input type="number" name="celsius">
  <input type="submit" name="temp" value="Convert">
</form>
<?php
if(isset($_POST['temp'])) {
  $c = $_POST['celsius'];
  $f = ($c * 9/5) + 32;
  echo "$c °C = $f °F";
}
?>
<hr>

<!-- 5. Swapping Variables -->
<h2>5. Swapping Variables</h2>
<form method="post">
  X: <input type="number" name="x">
  Y: <input type="number" name="y">
  <input type="submit" name="swap" value="Swap">
</form>
<?php
if(isset($_POST['swap'])) {
  $x = $_POST['x'];
  $y = $_POST['y'];
  $temp = $x;
  $x = $y;
  $y = $temp;
  echo "After swapping: X = $x, Y = $y";
}
?>
<hr>

<!-- 6. Salary Calculator -->
<h2>6. Salary Calculator</h2>
<form method="post">
  Basic Salary: <input type="number" name="basic">
  Allowance: <input type="number" name="allow">
  Deduction: <input type="number" name="deduct">
  <input type="submit" name="salary" value="Compute">
</form>
<?php
if(isset($_POST['salary'])) {
  $basic = $_POST['basic'];
  $allow = $_POST['allow'];
  $deduct = $_POST['deduct'];
  echo "Net Salary: ₱" . ($basic + $allow - $deduct);
}
?>
<hr>

<!-- 7. BMI Calculator -->
<h2>7. BMI Calculator</h2>
<form method="post">
  Weight (kg): <input type="number" name="weight" step="0.1">
  Height (m): <input type="number" name="height" step="0.01">
  <input type="submit" name="bmi" value="Compute BMI">
</form>
<?php
if(isset($_POST['bmi'])) {
  $w = $_POST['weight'];
  $h = $_POST['height'];
  $bmi = $w / ($h * $h);
  echo "Your BMI is " . round($bmi, 2);
}
?>
<hr>

<!-- 8. String Manipulation -->
<h2>8. String Manipulation</h2>
<form method="post">
  Sentence: <input type="text" name="sentence" style="width:300px;">
  <input type="submit" name="string" value="Analyze">
</form>
<?php
if(isset($_POST['string'])) {
  $s = $_POST['sentence'];
  echo "Number of characters: " . strlen($s) . "<br>";
  echo "Number of words: " . str_word_count($s) . "<br>";
  echo "Uppercase: " . strtoupper($s) . "<br>";
  echo "Lowercase: " . strtolower($s);
}
?>
<hr>

<!-- 9. Bank Account Simulation -->
<h2>9. Bank Account Simulation</h2>
<form method="post">
  Balance: <input type="number" name="bal">
  Deposit: <input type="number" name="dep">
  Withdraw: <input type="number" name="with">
  <input type="submit" name="bank" value="Update Balance">
</form>
<?php
if(isset($_POST['bank'])) {
  $bal = $_POST['bal'];
  $dep = $_POST['dep'];
  $with = $_POST['with'];
  echo "Final Balance: ₱" . ($bal + $dep - $with);
}
?>
<hr>

<!-- 10. Simple Grading System -->
<h2>10. Simple Grading System</h2>
<form method="post">
  Math: <input type="number" name="math">
  English: <input type="number" name="eng">
  Science: <input type="number" name="sci">
  <input type="submit" name="grade" value="Compute Grade">
</form>
<?php
if(isset($_POST['grade'])) {
  $m = $_POST['math'];
  $e = $_POST['eng'];
  $s = $_POST['sci'];
  $avg = ($m + $e + $s) / 3;
  if($avg >= 90) $g = "A";
  elseif($avg >= 80) $g = "B";
  elseif($avg >= 70) $g = "C";
  elseif($avg >= 60) $g = "D";
  else $g = "F";
  echo "Average: " . round($avg, 2) . "<br>Grade: $g";
}
?>
<hr>

<!-- 11. Currency Converter -->
<h2>11. Currency Converter</h2>
<form method="post">
  Amount in PHP: <input type="number" name="php">
  <input type="submit" name="currency" value="Convert">
</form>
<?php
if(isset($_POST['currency'])) {
  $php = $_POST['php'];
  $usd = $php * 0.018;
  $eur = $php * 0.016;
  $jpy = $php * 2.7;
  echo "₱$php = $" . round($usd,2) . " USD<br>";
  echo "₱$php = €" . round($eur,2) . " EUR<br>";
  echo "₱$php = ¥" . round($jpy,2) . " JPY";
}
?>
<hr>

<!-- 12. Travel Cost Estimator -->
<h2>12. Travel Cost Estimator</h2>
<form method="post">
  Distance (km): <input type="number" name="dist">
  Fuel Consumption (km/l): <input type="number" name="cons" step="0.1">
  Fuel Price (₱/L): <input type="number" name="price" step="0.1">
  <input type="submit" name="travel" value="Estimate">
</form>
<?php
if(isset($_POST['travel'])) {
  $dist = $_POST['dist'];
  $cons = $_POST['cons'];
  $price = $_POST['price'];
  $fuel_needed = $dist / $cons;
  $cost = $fuel_needed * $price;
  echo "Estimated Travel Cost: ₱" . round($cost, 2);
}
?>
<hr>

</body>
</html>

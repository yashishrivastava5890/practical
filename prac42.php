<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operation = $_POST['operation'];

if ($operation == "+") {
    $result = $num1 + $num2;
} elseif ($operation == "-") {
    $result = $num1 - $num2;
} elseif ($operation == "*") {
    $result = $num1 * $num2;
} elseif ($operation == "/") {
    if ($num2 != 0) {
        $result = $num1 / $num2;
    } else {
        $result = "Error: Cannot divide by zero";
    }
}

echo "Result: " . $result;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        Number 1: <input type="text" name="num1" required><br><br>
        Number 2: <input type="text" name="num2" required><br><br>

        Operation:
        <select name="operation">
            <option value="+">Addition (+)</option>
            <option value="-">Subtraction (-)</option>
            <option value="">Multiplication ()</option>
            <option value="/">Division (/)</option>
        </select><br><br>

        <input type="submit" value="Calculate">
    </form>
</body>
</html>
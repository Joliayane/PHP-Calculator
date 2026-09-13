<?php

$result = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 work correctly
    $num1 = (float) $_POST["num1"];
    $num2 = (float) $_POST["num2"];
    $operator = $_POST["operator"];

    switch ($operator) {
        case "+":
            $result = $num1 + $num2; 
            break;
        case "-":
            $result = $num1 - $num2;
            break;
        case "*":
            $result = $num1 * $num2;
            break;
        case "/":
            if ($num2 == 0) {
                $error = "Cannot divide by zero.";
            } else {
                $result = $num1 / $num2;
            }
            break;
        default:
            $error = "Invalid operator.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP Calculator</title>
</head>
<body>
    <h2>PHP Calculator</h2>
    <form method="POST">
        <input type="number" name="num1" step="any" required>
        <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="number" name="num2" step="any" required>
        <button type="submit">Calculate</button>
    </form>

    <?php if ($error !== "") { ?>
        <h3 style="color:red;">Error: <?php echo $error; ?></h3>
    <?php } elseif ($result !== "") { ?>
        <h3>Result: <?php echo $result; ?></h3>
    <?php } ?>
</body>
</html>
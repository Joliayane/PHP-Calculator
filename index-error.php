<?php

$result = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operator = $_POST["operator"];

    switch ($operator) {
        case "+":
            $result = $num1 . $num2;
            break;
        case "-":
            $result = $num1 - $num2;
            break;
        case "*":
            $result = $num1 * $num2;
            break;
        case "/":
            $result = $num1 / $num2;
            break;
        default:
            $result = "Invalid operator";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Buggy PHP Calculator</title>
</head>
<body>
    <h2>Buggy PHP Calculator</h2>
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

    <?php if ($result !== "") { ?>
        <h3>Result: <?php echo $result; ?></h3>
    <?php } ?>
</body>
</html>
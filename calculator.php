<?php
$result = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $expression = $_POST["expression"];

    // Allow only numbers and mathematical operators
    $cleanExpression = preg_replace('/[^0-9+\-*\/().]/', '', $expression);


    try {
        $result = eval("return $cleanExpression;");
    } catch (Exception $e) {
        $result = "Error";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iPhone Calculator</title>
    <link rel="stylesheet" href="cal.css">
   
</head>
<body>

<div class="calculator">
    <form method="POST">
        <div class="screen" id="screen"><?php echo $result; ?></div>
        <input type="hidden" id="expression" name="expression">
        <div class="buttons">
            <button type="button" class="btn clear" onclick="clearScreen()">AC</button>
            <button type="button" class="btn operator" onclick="appendCharacter('/')">÷</button>
            <button type="button" class="btn operator" onclick="appendCharacter('*')">×</button>
            <button type="button" class="btn operator" onclick="appendCharacter('-')">−</button>

            <button type="button" class="btn number" onclick="appendCharacter('7')">7</button>
            <button type="button" class="btn number" onclick="appendCharacter('8')">8</button>
            <button type="button" class="btn number" onclick="appendCharacter('9')">9</button>
            <button type="button" class="btn operator" onclick="appendCharacter('+')">+</button>

            <button type="button" class="btn number" onclick="appendCharacter('4')">4</button>
            <button type="button" class="btn number" onclick="appendCharacter('5')">5</button>
            <button type="button" class="btn number" onclick="appendCharacter('6')">6</button>
            <button type="submit" class="btn equal" onclick>=</button>

            <button type="button" class="btn number" onclick="appendCharacter('1')">1</button>
            <button type="button" class="btn number" onclick="appendCharacter('2')">2</button>
            <button type="button" class="btn number" onclick="appendCharacter('3')">3</button>
            
            <button type="button" class="btn number zero" onclick="appendCharacter('0')">0</button>
            <button type="button" class="btn operator" onclick="appendCharacter('.')">.</button>
        </div>
    </form>
</div>

<script>
    function appendCharacter(char) {
        let screen = document.getElementById("screen");
        let expression = document.getElementById("expression");
        screen.textContent += char;
        expression.value += char;
    }

    function clearScreen() {
        document.getElementById("screen").textContent = "";
        document.getElementById("expression").value = "";
    }
</script>

</body>
</html>

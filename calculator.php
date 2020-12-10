<h1>Simple Calculator</h1>
<form method="post">
    <fieldset>
        <legend>Calculator</legend>
        <label for="first">First operand: </label><input type="number" name="first-number" placeholder=""><br>
        <label for="operate">Operator: </label>
        <select name="operator">
            <option value="+">Addition</option>
            <option value="-">Subtraction</option>
            <option value="*">Multiplication</option>
            <option value="/">Division</option>
        </select><br>
        <label for="second">Second operand: </label><input type="number" name="second-number" placeholder=""><br>
        <button>Calculate</button>
    </fieldset>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_number = $_POST["first-number"];
    $operator = $_POST["operator"];
    $second_number = $_POST["second-number"];
    $result = calculate($first_number,$second_number,$operator);
    echo $result;
}
function calculate($first_number,$second_number,$operator) {
    try {
        switch($operator){
            case "+":
                $value1 = $first_number + $second_number;
                echo "Result: " . "<br>" . $first_number . "+" . $second_number . "=" . $value1;
                break;
            case "-":
                $value2 = $first_number - $second_number;
                echo "Result: " . "<br>" . $first_number . "-" . $second_number . "=" . $value2;
                break;
            case "*":
                $value3 = $first_number * $second_number;
                echo "Result: " . "<br>" . $first_number . "x" . $second_number . "=" . $value3;
                break;
            case "/":
                if ($second_number == 0) {
                    throw new Exception("/ by zero");
                }
                $value4 = $first_number / $second_number;
                echo "Result: " . "<br>" . $first_number . ":" . $second_number . "=" . $value4;
                break;
        }
    } catch (Exception $exception){
        return $exception->getMessage();
    }
}

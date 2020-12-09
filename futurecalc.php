<form method="post">
    <input type="number" name="inventment-amount" placeholder="Lượng tiền đầu tư ban đầu">
    <input type="number" name="yearly-interest-rate" placeholder="Lãi suất năm">
    <input type="number" name="number-of-years" placeholder="Số năm đầu tư">
    <button type="submit">Calculate</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inventment_amount = $_POST["inventment-amount"];
    $yearly_interest_rate = $_POST["yearly-interest-rate"];
    $number_of_years = $_POST["number-of-years"];
    $value = $inventment_amount * ($yearly_interest_rate + 1) * $number_of_years;
    echo "Giá trị tương lai là: " . $value;
}
?>


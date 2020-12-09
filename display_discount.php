<form method="post">
    <input type="text" name="product-discription" placeholder="Mô tả sản phẩm">
    <input type="number" name="list-price" placeholder="Giá niêm yết của sản phẩm">
    <input type="number" name="discount-percent" placeholder="Tỉ lệ chiết khấu">
    <button type="submit">Calculate Discount</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_discription = $_POST["product-discription"];
    $list_price = $_POST["list-price"];
    $discount_percent = $_POST["discount-percent"];
    $discount_amount = $list_price * $discount_percent * 0.1;
    $discount_price = $list_price - $discount_amount;
    echo "Mô tả sản phẩm: " . $product_discription . "<br>";
    echo "Lượng chiết khấu là: " . $discount_amount . "<br>";
    echo "Giá sau khi chiết khấu là: " . $discount_price;
}

<!DOCTYPE html>
<html lang="vi">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }
    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
</style>
<body>
<table border="0">
    <caption><h1>Danh sách khách hàng</h1></caption>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
        <th>Ảnh</th>
    </tr>
</table>
<?php
$customerlist = array(
    "1" => array("ten" => "Mai Văn Hoàn",
        "ngaysinh" => "1983-08-20",
        "diachi" => "Hà Nội",
        "anh" => "https://i.imgur.com/GVat3HQ.jpg"),
    "2" => array("ten" => "Nguyễn Văn Nam",
        "ngaysinh" => "1983-08-20",
        "diachi" => "Bắc Giang",
        "anh" => "https://i.imgur.com/x7cbIwV.jpg"),
    "3" => array("ten" => "Nguyễn Thái Hòa",
        "ngaysinh" => "1983-08-21",
        "diachi" => "Nam Định",
        "anh" => "https://i.imgur.com/zA9m9Mg.jpg"),
    "4" => array("ten" => "Trần Đăng Khoa",
        "ngaysinh" => "1983-08-22",
        "diachi" => "Hà Tây",
        "anh" => "https://i.imgur.com/Z4hcOTi.jpg"),
    "5" => array("ten" => "Nguyễn Đình Thi",
        "ngaysinh" => "1983-08-17",
        "diachi" => "Hà Nội",
        "anh" => "https://i.imgur.com/UZ8nkFr.jpg")
);
foreach($customerlist as $key => $values){
    echo "<tr>";
    echo "<td>".$key."</td>";
    echo "<td>".$values['ten']."</td>";
    echo "<td>".$values['ngaysinh']."</td>";
    echo "<td>".$values['diachi']."</td>";
    echo "<td><image src ='".$values['anh']."' width = '60px' height ='60px'/></td>";
    echo "</tr>";
}
?>
</body>
</html>

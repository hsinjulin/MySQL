<?php
// 抓product.sql中的pID->去查詢同列資料
$id=$_POST['pID'];
$link = mysqli_connect( 
    'localhost',  // MySQL主機名稱 
    'root',       // 使用者名稱 
    '',  // 密碼
    'supermarket');

// 從資料庫中查詢其他資料，並賦值給相應變數
$sql = "SELECT * FROM product WHERE pID = '$id'";
$result = mysqli_query($link, $sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $abute = $row["pAttribute"];
    $price = $row["pPrice"];
    $time = $row["pInsotckTime"];
}
echo "<table border='1px'>
    <tr>
        <td>pID</td>
        <td>pAttribute</td>
        <td>pPrice</td>
        <td>pInsotckTime</td>
    </tr>
    <tr>
        <td>$id</td>
        <td>$abute</td>
        <td>$price</td>
        <td>$time</td>
    </tr>
</table>";

mysqli_close($link);
?>
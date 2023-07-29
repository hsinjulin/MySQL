<?php
// 抓product.sql中的pID->去刪除同列資料
$id=$_POST['pID'];
$link = mysqli_connect( 
    'localhost',  // MySQL主機名稱 
    'root',       // 使用者名稱 
    '',  // 密碼
    'supermarket');

// 從資料庫中查詢其他資料，並賦值給相應變數
$sql = "DELETE FROM product WHERE pID = '$id'";
if (mysqli_query($link, $sql)){
    echo "刪除成功";
}else{
    echo "發生錯誤:".mysqli_error($link);
}
mysqli_close($link);
?>
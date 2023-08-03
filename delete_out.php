<?php
// 抓product.sql中的pID->去刪除同列資料
$id=$_POST['pID'];
require_once 'db_connect.php';

// 從資料庫中刪除其他資料
$sql = "DELETE FROM product WHERE pID = '$id'";
if (mysqli_query($link, $sql)){
    echo "刪除成功";
}else{
    echo "發生錯誤:".mysqli_error($link);
}
mysqli_close($link);
?>
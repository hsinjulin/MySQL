<?php
    $id=$_POST['id'];
    $abute=$_POST['abute'];
    $price=$_POST['price'];
    $time=$_POST['time'];

    require_once 'db_connect.php';
        
    $sql = "insert into product values('".$id."','".$abute."','".$price."','".$time."')";
    echo $sql."<br/>";
    if ( $result = mysqli_query($link, $sql) ) { 
        echo "ok";
    }			

    mysqli_close($link);
?>
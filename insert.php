<?php
    $id=$_POST['id'];
    $abute=$_POST['abute'];
    $price=$_POST['price'];
    $time=$_POST['time'];

    $link = @mysqli_connect( 
        'localhost',  // MySQL主機名稱 
        'root',       // 使用者名稱 
        '',  // 密碼
        'supermarket');
        
    $sql = "insert into product values('".$id."','".$abute."','".$price."','".$time."')";
    echo $sql."<br/>";
    if ( $result = mysqli_query($link, $sql) ) { 
        echo "ok";
    }			

    mysqli_close($link);
?>
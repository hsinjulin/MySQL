<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>查詢</title>
<style>
  p{
    font-size: large;
  }
</style>
</head>
<body>
<form action="Inquire_out.php" method="post" name="form1" id="form1">
<p>
  <label for="textfield">ID:</label>
  <select name="pID">
        <option value="whatm" selected="true">請選擇ID</option>
        <?php
          // 抓product.sql中的pID->去查詢同列資料
          $id=$_POST['pID'];
          $link = mysqli_connect( 
              'localhost',  // MySQL主機名稱 
              'root',       // 使用者名稱 
              '',  // 密碼
              'supermarket');
              
          $sql = "SELECT pID FROM product";
          $result = mysqli_query($link, $sql);
          if ($result->num_rows > 0) {
            // 將資料轉換為關聯陣列並使用迴圈顯示在網頁上
            while ($row = $result->fetch_assoc()) {
                echo '<option value="' . $row["pID"] . '">' . $row["pID"] . '</option>';
            }
          }
        mysqli_close($link);
        ?>
        
    </select>
</p>
<p>
  <input type="submit" name="submit" id="submit" value="查詢">
</p>
</form>
</body>
</html>
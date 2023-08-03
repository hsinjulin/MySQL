<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>更新</title>
<style>
  p{
    font-size: large;
  }
</style>
</head>
<body>
<form action="updata_out.php" method="post" name="form1" id="form1">
<p>
  <label for="textfield">ID:</label>
  <select name="pID">
        <option value="whatm" selected="true">請選擇ID</option>
        <?php
          // 抓product.sql中的pID->去查詢同列資料
          $id=$_POST['pID'];
          require_once 'db_connect.php';
              
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
  <label for="textfield">Price:</label>
  <input name="pPrice" type="text" autofocus required id="pPrice" size="20">
</p>
<p>
  <input type="submit" name="submit" id="submit" value="更新">
</p>
</form>
</body>
</html>
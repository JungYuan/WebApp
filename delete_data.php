<?php
  if (isset($_POST["excuting"]) && $_POST["excuting"]=="del"){
    require("db_connect.php");
    $dbquery = "DELETE FROM ddd WHERE m_index = ".$_POST["m_indext"];
    $db_link->query($dbquery);
    $db_link->close();
    header("Location: index.php");
  }
 ?>
<!DOCTYPE html>
<html lang="zh-Hant-TW" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Delete Data</title>
  </head>
  <body>
    <?php
        require("db_connect.php");
        //mysqli_select_db($db_link, "test");
        // query by funvtion
        /*$query = 'SELECT * FROM ddd';
        $result = mysqli_query($db_link, $query);*/
        $m_indexdel = $_GET["id"];
        $dbquery = 'SELECT * FROM ddd WHERE m_index = '.$m_indexdel;
        $result = $db_link->query($dbquery);
        echo "<p><strong>郵遞區號資料庫 - 刪除資料</strong></p>";
        echo '<form action="" method="post" name="formDel" id="formDel">
                 <table border="1">
                   <tr><td>郵遞區號</td><td>縣市</td><td>功能</tr>';
        //while ($each_result = mysqli_fetch_assoc($result)){
        while ($each_result = $result->fetch_assoc()){
          $show_table = "<tr>";
          foreach ($each_result as $item=>$value){
            $show_table = $show_table."<td>".$value."</td>";
          }
          $show_table = $show_table.'<td><input type="hidden" name="excuting" value="del">';
          $show_table = $show_table.'<input type="hidden" name="m_indext" value='.$m_indexdel.'>';
          $show_table = $show_table.'<input type="submit" name="button" value="確認刪除"></td>';
          echo $show_table."</tr>";
        }
        echo "</table></form>";
        //mysqli_close($db_link);
        $db_link->close();
     ?>
     <hr>
     <a href="home.php">返回Home</a>
  </body>
</html>

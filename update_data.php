<?php
  if (isset($_POST["excuting"]) && $_POST["excuting"]=="update"){
    require("db_connect.php");
    $dbquery = "UPDATE ddd SET m_index=?, area=? WHERE m_index = ?";
    $pre_dbquery = $db_link->prepare($dbquery);
    $pre_dbquery->bind_param('isi', $_POST['m_index'], $_POST['area'], $_POST['m_index_o']);
    $pre_dbquery->execute();
    $pre_dbquery->close();
    $db_link->close();
    header("Location: index.php");
  }
 ?>
<!DOCTYPE html>
<html lang="zh-Hant-TW" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Revising Data</title>
  </head>
  <body>
    <?php
        require("db_connect.php");
        //mysqli_select_db($db_link, "test");
        // query by funvtion
        /*$query = 'SELECT * FROM ddd';
        $result = mysqli_query($db_link, $query);*/
        $m_indexrev = $_GET["id"];
        $dbquery = "SELECT * FROM ddd WHERE m_index = ?";
        $pre_dbquery = $db_link->prepare($dbquery);
        $pre_dbquery->bind_param("i", $m_indexrev);
        $pre_dbquery->execute();
        $pre_dbquery->bind_result($m_index_r, $area_r);
        $pre_dbquery->fetch();
        echo $m_indexrev."  ssss  ".$m_index_r." aaaa  ".$area_r;
        echo "<p><strong>郵遞區號資料庫 - 更新資料</strong></p>";
        echo '<form action="" method="post" name="formUpd" id="formUpd">
                 <table border="1">
                   <tr><td>郵遞區號</td><td>縣市</td><td>功能</tr>';
        $show_table = "<tr>";
        $show_table = $show_table."<td><input type='text' pattern='[0-9]{3}'
                         title='Limit 3 digits' name='m_index' value="
                         .$m_index_r."></td>";
        $show_table = $show_table."<td><input type='text' name='area' value="
                      .$area_r."></td>";
        $show_table = $show_table.'<td><input type="hidden" name="excuting" value="update">';
        $show_table = $show_table.'<input type="hidden" name="m_index_o" value='.$m_indexrev.'>';
        $show_table = $show_table.'<input type="submit" name="button" value="資料更新"></td>';
        echo $show_table."</tr>";
        echo "</table></form>";
        //mysqli_close($db_link);
        $db_link->close();
     ?>
     <hr>
     <a href="index.php">返回首頁</a>
  </body>
</html>

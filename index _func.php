<!DOCTYPE html>
<html lang="zh-Hant-TW" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>MySQL practice</title>
  </head>
  <body>
    <?php
        require("db_connect.php");
        //mysqli_select_db($db_link, "test");
        // query by funvtion
        $query = 'SELECT * FROM ddd';
        $result = mysqli_query($db_link, $query);
        /*$dbquery = 'SELECT * FROM ddd';
        $result = $db_link->query($dbquery);*/
        echo "<p><strong>郵遞區號資料庫</strong></p>";
        echo "目前資料筆數 ：".$result->num_rows."        <a href='append_area.php'>新增區域 </a><br>";
        echo "<table border='1'>
                <tr><td>郵遞區號</td><td>縣市</td><td>功能</tr>";
        while ($each_result = mysqli_fetch_assoc($result)){
        //while ($each_result = $result->fetch_assoc($result)){
          $show_table = "<tr>";
          foreach ($each_result as $item=>$value){
            $show_table = $show_table."<td>".$value."</td>";
          }
          $show_table = $show_table."<td><a href='update_data.php?id=".$each_result['m_index']."'>修改</a>";
          $show_table = $show_table."  <a href='delete_data.php?id=".$each_result['m_index']."'>刪除</a></td>";
          echo $show_table."</tr>";
        }
        echo "</table>";
        mysqli_close($db_link);
        //$db_link->close();
        # date and time operation : calculate age
        $b_day='1967-01-11';
        $a_day='2008-05-11';
        $today = date('U'); #today
        print(date("Y-m-d",$today).' ~ '.$b_day.'<br>');
        $birthday=($today - strtotime($b_day))/86400/365;
        print($birthday);
     ?>
  </body>
</html>

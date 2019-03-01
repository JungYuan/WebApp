<!DOCTYPE html>
<html  lang="zh-Hant-TW" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>CCS preactice demo</title>
		<style type="text/css">
			.head{
				background-color: #003344; color: white;font-weight: bold;font-size: 30px;
				text-align: center;padding: 10px;
			}
      .content{
        width: 1000px; margin-left: auto;margin-right: auto;text-align: center;
        padding: 10px;
      }
      table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        text-align: center;
        padding: 5px;
        margin: 5px;
      }
      table#t01 tr:nth-child(even) {
        background-color: #eee;
      }
      table#t01 tr:nth-child(odd) {
       background-color: #fff;
      }
      table#t01 th {
        background-color: gray;
        color: white;
      }
      @media screen and (max-width:600px) {
        .head{font-size: 24px;}
        .content{width: 100%; text-align: center;}
      }
		</style>
  </head>
  <body style="margin: 0px; background-color:#eeeeee;">
    <?php
        require("db_connect.php");
        //mysqli_select_db($db_link, "test");
        // query by funvtion
        /*$query = 'SELECT * FROM ddd';
        $result = mysqli_query($db_link, $query);*/
        $dbquery = 'SELECT * FROM ddd';
        $result = $db_link->query($dbquery);
        $db_link->close();
        echo '<div class="head">郵遞區號資料庫</div>';
        echo '<div class="content">目前資料筆數 ：'.$result->num_rows."
              <a href='append_area.php'>新增區域 </a>";
        echo '<table id="t01" align="center">
                <tr><th>郵遞區號</th><th>縣市</th><th>功能</th></tr>';
        //while ($each_result = mysqli_fetch_assoc($result)){
        while ($each_result = $result->fetch_assoc()){
          $show_table = "<tr>";
          foreach ($each_result as $item=>$value){
            $show_table = $show_table."<td>".$value."</td>";
          }
          $show_table = $show_table."<td><a href='update_data.php?id=".$each_result['m_index']."'>修改</a>";
          $show_table = $show_table."  <a href='delete_data.php?id=".$each_result['m_index']."'>刪除</a></td>";
          echo $show_table."</tr>";
        }
        echo "</table>";
        //mysqli_close($db_link);
        # date and time operation : calculate age
        $b_day='1967-01-11';
        $a_day='2008-05-11';
        $today = date('U'); #today
        print(date("Y-m-d",$today).' ~ '.$b_day.'<br>');
        $birthday=($today - strtotime($b_day))/86400/365;
        print($birthday);
     ?>
   </div>
  </body>
</html>

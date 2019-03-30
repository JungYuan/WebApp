<?php
  require("db_connect.php");
  //mysqli_select_db($db_link, "test");
  // query by funvtion
  /*$query = 'SELECT * FROM ddd';
  $result = mysqli_query($db_link, $query);*/
  $dbquery = 'SELECT * FROM ddd';
  $result = $db_link->query($dbquery);
  $db_link->close();
  echo '<div class="text-center">目前資料筆數 ：'.$result->num_rows."
        <a href='append_area.php'>新增區域 </a></div>";
  echo '<table class="table table-striped" id="t01" align="center">
          <thead><tr><th scope="col"></th>
                     <th scope="col">郵遞區號</th>
                     <th scope="col">縣市</th>
                     <th scope="col">功能</th></tr></thead>
                     <tbody>';
  //while ($each_result = mysqli_fetch_assoc($result)){
  while ($each_result = $result->fetch_assoc()){
    $show_table = "<tr><th scope='row'></th>";
    foreach ($each_result as $item=>$value){
      $show_table = $show_table."<td>".$value."</td>";
    }
    $show_table = $show_table."<td class='row'><div class='col-md'><a href='update_data.php?id=".$each_result['m_index']."'>修改</a></div>";
    $show_table = $show_table."  <div class='col-md'><a href='delete_data.php?id=".$each_result['m_index']."'>刪除</a></div></td>";
    echo $show_table."</tr>";
  }
  echo "</tbody></table>";
  //mysqli_close($db_link);
  # date and time operation : calculate age
  $b_day='1967-01-11';
  $a_day='2008-05-11';
  $today = date('U'); #today
  echo "<div class='text-center'><br>";
  print('Today : '.date("Y-m-d",$today).'      Your Birthday : '.$b_day.'<br>');
  $birthday=ceil(($today - strtotime($b_day))/86400/365);
  print("Your age is ".$birthday);
  echo "</div>";
?>

<?php
    #mysqli_connect(host,username,password,dbname,port,socket);
    //echo "<h1>Connect to MySQL serve ......... <br></h1>";
    $user = "root";
    $password = "root";
    $db_name = "test";
    $host = "localhost";
    $port = 8889;
    //connect by OBJ
    $db_link = new mysqli($host, $user, $password, $db_name, $port);
      if ($db_link->connect_error != ""){
        die("資料庫連線失敗...");
      } else {
        //echo "<p><h1><strong>資料庫成功連線 :-)</h1></p>";
        //$db_link->query($db_link, "SET NAMES 'utf8mb4'");
        $db_link->query("SET NAMES utf8");
      }
?>

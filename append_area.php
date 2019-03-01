<!DOCTYPE html>
<html lang="zh-Hant-TW" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Add area data</title>
  </head>
  <body>
    <p>新增郵遞區號區域</p>
    <form action="" method="post" name="formInsert" id="formInsert">
        <table>
            <tr><td>郵遞區號 : </td><td><input type="text" pattern="[0-9]{3}"
                             title="Limit 3 digits" name="m_index"></td></tr>
            <tr><td>郵遞地區 : </td><td><input type="text" name="area"></td></tr>
        </table>
        <input type="hidden" name="excuting" value="insert">
        <input type="submit" name="button" value="新增資料">
        <input type="reset" name="button_r" value="重新填寫"><br><hr>
        <a href='index.php'>返回首頁 </a><br>
    </form>
    <?php
      if (isset($_POST["excuting"])&&($_POST["excuting"]=="insert")){
        if ($_POST["m_index"]=="" || $_POST["area"]==""){
          echo "......資料不可以是空的......<br>";
        } else {
          require("db_connect.php");
          $ins_query = "INSERT INTO ddd (m_index, area) VALUES (?, ?)";
          $ins_cmd = $db_link->prepare($ins_query);
          //echo intval($_POST["m_index"])."   ". $_POST["area"];
          $ins_cmd->bind_param("is", $_POST["m_index"], $_POST["area"]);
          if ($ins_cmd->execute()){
            $resp = "<資料新增完成.....>";
          } else {
            $resp = "<資料新增發生錯誤>";
          };
          $ins_cmd->close();
          $db_link->close();
          echo $resp;
          header("Location: index.php");
        }
      }
    ?>
  </body>
</html>

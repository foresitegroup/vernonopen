<?php
include("login.php");
include("../inc/dbconfig.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
  <META http-equiv="Content-Type" content="text/html;charset=utf-8" >
  <META http-equiv="pragma" content="no-cache">
  <META name="language" content="en">
  <META name="author" content="Remedi Creative">
  <title>Vernon Open - Registration</title>
  <link rel="stylesheet" href="../inc/vo2008.css" type="text/css" media="screen">
  <script language="JavaScript" type="text/JavaScript">
    <!--
    function pop(u) {
      var width=440;
      var height=300;
      var x = Math.round((screen.availWidth - width) / 2);
	    var y = Math.round((screen.availHeight - height) / 2);
      var load = window.open(u,'','scrollbars=yes,left='+x+',top='+y+',menubar=no,height='+height+',width='+width+',resizable=yes,toolbar=no,location=no,status=no,addressbar=no');
    }
    //-->
  </script>
</head>
<body>

<? include("menu.php"); ?>

<div style="clear: both; height: 15px;"></div>

<div style="height: 690px; background: #8EAF4B;">
  <div style="width: 90%; margin: 0 auto;">
    
    <span style="font-size: 120%; font-weight: bold;">Registered Users</span> &nbsp; &nbsp; 
    <span style="font-size: 90%;"><a href="regexport.php">Export as CSV</a> | <a href="regexport.php?x">Export as XLS</a> | <a href="emailexport.php">Export email as text</a></span><br>
    <br>
    
    <div style="font-size: 90%;">
      
      <table width="100%">
        <tr>
          <td>&nbsp;</td>
          <td valign=\"top\"><strong>Name</strong></td>
          <td valign=\"top\"><strong>Address</strong></td>
          <td valign=\"top\"><strong>City</strong></td>
          <td valign=\"top\"><strong>State</strong></td>
          <td valign=\"top\"><strong>Email</strong></td>
          <td valign=\"top\"><strong>Date</strong></td>
        </tr>
      <?php
      $query = "SELECT * FROM register ORDER BY name ASC";
      
      $result = mysql_query($query);

      if($result) {
        while($row = mysql_fetch_array($result)) {
          echo "<tr>
            <td valign=\"top\" nowrap><a href=\"registrationdelete.php?id=" . $row['id'] . "\">delete</a> | <a href=\"javascript:pop('registrationview.php?id=" . $row['id'] . "')\">See full details</a></td>
            <td valign=\"top\" nowrap>" . $row['name'] . "</td>
            <td valign=\"top\">" . $row['address'] . "</td>
            <td valign=\"top\">" . $row['city'] . "</td>
            <td valign=\"top\">" . $row['state'] . "</td>
            <td valign=\"top\">" . $row['email'] . "</td>
            <td valign=\"top\">";
            if (!empty($row['date'])) { echo date("n/j/y", $row['date']); }
            echo "</td>
          </tr>\n";
        }
      }
      ?>
      </table>
    </div>
    
    <div style="clear: both;"></div>
    
    <br><br>

  </div>
</div>

<br><br>

</body>
</html>
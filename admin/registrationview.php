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
  <title>Vernon Open Registration Viewer</title>
  <link rel="stylesheet" href="../inc/vo2008.css" type="text/css" media="screen">
</head>
<body>

<div style="height: 300px; background: #8EAF4B;">
  <div style="width: 90%; margin: 0 auto;">
  
    <?php
    $id = $_GET['id'];
    
    $query = "SELECT * FROM register WHERE id = '$id'";
    
    $result = mysql_query($query);
    $row = mysql_fetch_array($result);
    
    // Load info for display
    $display = "<br>" . $row['name'];
    $display .= "<br>" . $row['address'];
    $display .= "<br>" . $row['city'] . ", " . $row['state'] . " " . $row['zip'];
    $display .= "<br>" . $row['phone'];
    $display .= "<br>" . $row['email'] . "<br>";
    
    if (!empty($row['foursome'])) {
      $display .= "<br>Foursome: " . $row['foursome'];
    }
    if (!empty($row['golf'])) {
      $display .= "<br>Golf: " . $row['golf'];
    }
    if (!empty($row['hole'])) {
      $display .= "<br>Hole Sponsorship: " . $row['hole'];
    }
    if (!empty($row['sponsor_name'])) {
      $display .= "<br>Name of Hole Sponsor : " . $row['sponsor_name'];
    }
    if (!empty($row['reception'])) {
      $display .= "<br>Reception Only: " . $row['reception'];
    }
    
    $display .= "<br>";
    
    if (!empty($row['foursome_name1'])) {
      $display .= "<br>Foursome Name 1: " . $row['foursome_name1'];
    }
    if (!empty($row['foursome_name2'])) {
      $display .= "<br>Foursome Name 2: " . $row['foursome_name2'];
    }
    if (!empty($row['foursome_name3'])) {
      $display .= "<br>Foursome Name 3: " . $row['foursome_name3'];
    }
    if (!empty($row['foursome_name4'])) {
      $display .= "<br>Foursome Name 4: " . $row['foursome_name4'];
    }
    
    $display .= "<br>";
    
    if (!empty($row['amount_enclosed'])) {
      $display .= "<br>Amount Enclosed: " . $row['amount_enclosed'];
    }
    
    if (!empty($row['date'])) {
      $display .= "<br>Date Registered: " . date("n/j/y", $row['date']);
    }
    
    echo $display;
    ?>

  </div>
</div>

<br>

</body>
</html>
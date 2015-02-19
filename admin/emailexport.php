<?php
include("../inc/dbconfig.php");

$result = mysql_query("SELECT * FROM register ORDER BY email ASC");

while($row = mysql_fetch_array($result)) {
  $data .= $row['email'] . "\r\n";
}

$filetag = date("Ymd-Hi");

header("Content-Type: text/plain");
header("Content-Disposition: attachment; filename=email_$filetag.txt");
header("Pragma: no-cache");
header("Expires: 0");
print $data;
exit;
?>
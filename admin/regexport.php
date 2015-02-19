<?php
include("../inc/dbconfig.php");

if ($_SERVER['QUERY_STRING'] != "") {
  $fileext = "xls";
  $sep = "\t";
} else {
  $fileext = "csv";
  $sep = ",";
}

$result = mysql_query("SELECT name,address,city,state,zip,phone,email,foursome,golf,hole,sponsor_name,reception,foursome_name1,foursome_name2,foursome_name3,foursome_name4,amount_enclosed,FROM_UNIXTIME(date,'%c/%e/%y') FROM register ORDER BY name ASC");
$csv_output .= "Name" . $sep . "Address" . $sep . "City" . $sep . "State" . $sep . "Zip Code" . $sep . "Phone Number" . $sep . "Email" . $sep . "Foursome" . $sep . "Golf" . $sep . "Hole Sponsorship" . $sep . "Sponsor Name" . $sep . "Reception Only" . $sep . "Foursome #1" . $sep . "Foursome #2" . $sep . "Foursome #3" . $sep . "Foursome #4" . $sep . "Amount Enclosed" . $sep . "Date";

while($row = mysql_fetch_row($result)) {
	$line = '';
	foreach($row as $value) {
		if ((!isset($value)) OR ($value == "")) {
			$value = $sep; 
		} else {
      $value = str_replace('12/31/69', '', $value);
			$value = str_replace('"', '""', $value);
      $value = str_replace("\n", " ", $value);
			$value = '"' . $value . '"' . $sep; 
		}
		$line .= $value;
	}
  $data .= $line . "\n";
}
$data = str_replace("\r","",$data);

$filetag = date("Ymd-Hi");

header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=$filetag.$fileext");
header("Pragma: no-cache");
header("Expires: 0");
print $csv_output."\n".$data;
exit;
?>
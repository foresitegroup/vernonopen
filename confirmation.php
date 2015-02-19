<?php
$dbhost = "localhost";
$dbuser = "remediho_vernon";
$dbpass = "VO123pancan";
$dbname = "remediho_vernonopen";

session_start();
include_once 'securimage/securimage.php';
$securimage = new Securimage();

if ($securimage->check($_POST['captcha_code']) == true) {
  $SendTo = "ckbradz@yahoo.com";
  //$SendTo = "m.lippert@remedicreative.com";
  $subject = "Entry form from vernonopen.com";
  $from = "From: " . $_POST['name'] . " <" . $_POST['email'] . ">\r\n";

  $message = $_POST['name'] . "\n";

  if (!empty($_POST['address'])) {
    $message .= $_POST['address'] . "\n";
  }
  if (!empty($_POST['city'])) {
    $message .= $_POST['city'];
  }
  if (!empty($_POST['state'])) {
    $state = $_POST['state'];
  }
  if ((!empty($_POST['city'])) && (!empty($state))) {
    $message .= ", " . $state . " ";
  } else {
    $message .= $state . " ";
  }
  if (!empty($_POST['zip'])) {
    $message .= $_POST['zip'];
  }
  if (!empty($_POST['phone'])) {
    $message .= "\n\n" . $_POST['phone'];
  }
  if (!empty($_POST['email'])) {
    $message .= "\n" . $_POST['email'];
  }
  $message .= "\n";
  if (!empty($_POST['foursome'])) {
    $message .= "\nFoursome: " . $_POST['foursome'];
  }
  if (!empty($_POST['golf'])) {
    $message .= "\nGolf: " . $_POST['golf'];
  }
  if (!empty($_POST['hole'])) {
    $message .= "\nHole: " . $_POST['hole'];
  }
  if (!empty($_POST['sponsor_name'])) {
    $message .= "\nSponsor Name: " . $_POST['sponsor_name'];
  }
  if (!empty($_POST['reception'])) {
    $message .= "\nReception Only: " . $_POST['reception'];
  }
  $message .= "\n";
  if (!empty($_POST['foursome_name1'])) {
    $message .= "\nFoursome Name 1: " . $_POST['foursome_name1'];
  }
  if (!empty($_POST['foursome_name2'])) {
    $message .= "\nFoursome Name 2: " . $_POST['foursome_name2'];
  }
  if (!empty($_POST['foursome_name3'])) {
    $message .= "\nFoursome Name 3: " . $_POST['foursome_name3'];
  }
  if (!empty($_POST['foursome_name4'])) {
    $message .= "\nFoursome Name 4: " . $_POST['foursome_name4'];
  }
  $message .= "\n";
  if (!empty($_POST['amount_enclosed'])) {
    $message .= "\nAmount Enclosed: " . $_POST['amount_enclosed'];
  }

  // Set varibles to be inserted in DB
  $name = $_POST['name'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $zip = $_POST['zip'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $foursome = $_POST['foursome'];
  $golf = $_POST['golf'];
  $hole = $_POST['hole'];
  $sponsor_name = $_POST['sponsor_name'];
  $reception = $_POST['reception'];
  $foursome_name1 = $_POST['foursome_name1'];
  $foursome_name2 = $_POST['foursome_name2'];
  $foursome_name3 = $_POST['foursome_name3'];
  $foursome_name4 = $_POST['foursome_name4'];
  $amount_enclosed = $_POST['amount_enclosed'];
  $rightnow = time();

  // Open DB and insert data
  $db = mysql_connect($dbhost, $dbuser, $dbpass);
  mysql_select_db($dbname, $db);
  $newrec = "INSERT INTO register (name,address,city,state,zip,phone,email,foursome,golf,hole,sponsor_name,reception,foursome_name1,foursome_name2,foursome_name3,foursome_name4,amount_enclosed,date) VALUES('$name','$address','$city','$state','$zip','$phone','$email','$foursome','$golf','$hole','$sponsor_name','$reception','$foursome_name1','$foursome_name2','$foursome_name3','$foursome_name4','$amount_enclosed','$rightnow')";
  mysql_query($newrec);
  mysql_close();

  // Print results
  //echo "<pre>$SendTo\n$from$subject\n\n$message</pre>";

  // Send it
  mail($SendTo, $subject, $message, $from);

  // Done, so let's go back
  //header( "Location: contact.php" );
  
  $PageTitle = "Registration Submitted";
  $TextOutput = "<strong>Your registration has been submitted!</strong><br>
        <br>
        <strong>Please send  Payment to:</strong><br>
        The Vernon Open<br>
        c/o Centennial Bar & Grille<br>
        10352 N. Port Washington Rd.<br>
        Mequon, WI 53092<br>
        <br>
        <strong>All questions can be directed to:</strong><br>
        Cathy Kleiman<br>
        Office: 262-241-1553<br>
        Fax: 262-241-3224<br>
        E-mail: <a href=\"mailto:ck&#98;&#114;&#97;&#100;&#122;&#64;y&#97;&#104;o&#111;&#46;&#99;&#111;&#109;\">&#99;&#107;&#98;&#114;&#97;&#100;&#122;&#64;&#121;a&#104;&#111;&#111;&#46;c&#111;m</a>";
  
} else {
  $PageTitle = "Registration Failed";
  $TextOutput = "<strong>Registration NOT submitted</strong><br>
  <br>
  You must enter the anti-spam text.  Please go back and do so.";
}

  ?>

  <?
  include("header.php");
  ?>
      <div id="right-col"> <!-- BEGIN right column -->
      
        <?php echo $TextOutput; ?>
      
      </div> <!-- END right column -->
  <?
  include("footer.php");
  ?>

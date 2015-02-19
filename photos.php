<?
$PageTitle = "Photo Gallery 2011";
include("header.php");
?>
    <script type="text/javascript" src="inc/prototype.js"></script>
    <script type="text/javascript" src="inc/scriptaculous.js?load=effects,builder"></script>
    <script type="text/javascript" src="inc/lightbox.js"></script>
    <link rel="stylesheet" href="inc/lightbox.css" type="text/css" media="screen" />
    
    <div id="right-col"> <!-- BEGIN right column -->
    
      <strong>Photo Gallery 2011</strong><br>
      <br>
      
      <?php
      if ($handle = opendir('images/photos2011')) {
        while (false !== ($file = readdir($handle))) {
          if ($file != "." && $file != ".." && $file != "thumbs") {
            echo "<a href=\"images/photos2011/$file\" rel=\"lightbox[]\"><img src=\"images/photos2011/thumbs/$file\" id=\"thumb\"></a>\n";
          }
        }
        closedir($handle);
      }
      ?>
      
      <br><br>
      <a href="photos2010.php">View past photos</a>
      
    </div> <!-- END right column -->
<?
include("footer.php");
?>
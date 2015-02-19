<?
$PageTitle = "Photo Gallery 2010";
include("header.php");
?>
    <script type="text/javascript" src="inc/prototype.js"></script>
    <script type="text/javascript" src="inc/scriptaculous.js?load=effects,builder"></script>
    <script type="text/javascript" src="inc/lightbox.js"></script>
    <link rel="stylesheet" href="inc/lightbox.css" type="text/css" media="screen" />
    
    <div id="right-col"> <!-- BEGIN right column -->
    
      <strong>Photo Gallery 2010</strong><br>
      <br>
      
      <?php
      if ($handle = opendir('images/photos2010')) {
        while (false !== ($file = readdir($handle))) {
          if ($file != "." && $file != ".." && $file != "thumbs") {
            echo "<a href=\"images/photos2010/$file\" rel=\"lightbox[]\"><img src=\"images/photos2010/thumbs/$file\" id=\"thumb\"></a>\n";
          }
        }
        closedir($handle);
      }
      ?>
      
    </div> <!-- END right column -->
<?
include("footer.php");
?>
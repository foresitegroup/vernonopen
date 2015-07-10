<?
$PageTitle = "Sign Up & Contact";
include("header.php");
?>

    <script type="text/javascript">
        <!--
        function checkform (form) {
          if (form.name.value == "") {
            alert('Name required.');
            form.name.focus();
            return false ;
          }
          if (form.address.value == "") {
            alert('Address required.');
            form.address.focus();
            return false ;
          }
          if (form.city.value == "") {
            alert('City required.');
            form.city.focus();
            return false ;
          }
          if (form.state.value == "") {
            alert('State required.');
            form.state.focus();
            return false ;
          }
          if (form.zip.value == "") {
            alert('Zip Code required.');
            form.zip.focus();
            return false ;
          }
          if (form.phone.value == "") {
            alert('Phone Number required.');
            form.phone.focus();
            return false ;
          }
          if (form.email.value == "") {
            alert('E-mail required.');
            form.email.focus();
            return false ;
          }
          return true ;
        }
        //-->
      </script>
    <!--
    <div style="position: absolute; top: 150px; left: 47px; width: 220px; text-align: right;">
      <div id="left-col-upper-head">PRINTABLE ENTRY FORM</div>
      If you wish to print out and mail your entry for the 12th Annual Vernon Open, please <a href="pdf/2013_Registration_Form.pdf" target="new">download the form</a>.
    </div>
    -->
    <div style="position: absolute; top: 350px; left: 20px;">
      <img src="images/signup1.jpg" alt="">
    </div>
    
    <div id="right-col"> <!-- BEGIN right column -->
    
    <form method="POST" action="confirmation.php">
      <table>
        <tr>
          <td colspan="2" style="padding: 0;">
            <table>
              <tr>
                <td>Name</td><td><input type="text" name="name" size="35" tabindex="1"></td>
              </tr>
              <tr>
                <td>Address</td><td><input type="text" name="address" size="35" tabindex="2"></td>
              </tr>
              <tr>
                <td>City</td><td><input type="text" name="city" size="35" tabindex="3"></td>
              </tr>
              <tr>
                <td>State</td><td><input type="text" name="state" size="35" tabindex="4"></td>
              </tr>
              <tr>
                <td>Zip</td><td><input type="text" name="zip" size="15" tabindex="5"></td>
              </tr>
              <tr>
                <td>Phone</td><td><input type="text" name="phone" size="35" tabindex="6"></td>
              </tr>
              <tr>
                <td>Email</td><td><input type="text" name="email" size="35" tabindex="7"></td>
              </tr>
            </table>
          </td>
        </tr>
        <tr>
          <td colspan="2"><br><strong>Costs</strong></td>
        </tr>
        <tr>
          <td nowrap align="right">Foursome ($600) Qty &nbsp; </td><td> <input type="text" name="foursome" size="20" tabindex="8"></td>
        </tr>
        <tr>
          <td nowrap align="right">Golf ($150 each person) Qty &nbsp; </td><td> <input type="text" name="golf" size="20" tabindex="8"></td>
        </tr>
        <tr>
          <td nowrap align="right">Hole Sponsorship ($125 each) Qty &nbsp; </td><td> <input type="text" name="hole" size="20" tabindex="10"></td>
        </tr>
        <tr>
          <td nowrap align="right">Name of Hole Sponsor &nbsp; </td><td> <input type="text" name="sponsor_name" size="34" tabindex="11"></td>
        </tr>
        <tr>
          <td nowrap align="right">Reception Only ($35 each) Qty &nbsp; </td><td> <input type="text" name="reception" size="20" tabindex="12"></td>
        </tr>
        <tr>
          <td colspan="2"><br><strong>Names of persons in your Foursome</strong></td>
        </tr>
        <tr>
          <td colspan="2">#1 <input type="text" name="foursome_name1" size="30" tabindex="13"></td>
        </tr>
        <tr>
          <td colspan="2">#2 <input type="text" name="foursome_name2" size="30" tabindex="14"></td>
        </tr>
        <tr>
          <td colspan="2">#3 <input type="text" name="foursome_name3" size="30" tabindex="15"></td>
        </tr>
        <tr>
          <td colspan="2">#4 <input type="text" name="foursome_name4" size="30" tabindex="16"></td>
        </tr>
        <tr>
          <td colspan="2"><br>Total Amount I will send $ <input type="text" name="amount_enclosed" size="20" tabindex="17"></td>
        </tr>
        <tr><td colspan="2">&nbsp;</td></tr>
        <tr>
          <td colspan="2">
            Please enter the text from the image below.  This helps us prevent spam.<br>
            <img id="captcha" src="securimage/securimage_show.php" alt="CAPTCHA Image" style="vertical-align: middle;"> <input type="text" name="captcha_code" size="10" maxlength="6">
          </td>
        </tr>
        <tr>
          <td colspan="2" align="center"><br><input type="submit" value="Submit" name="B1"></td>
        </tr>
      </table>
    </form>
    
    <br>
    
    <strong>Send  Payment to:</strong><br>
    The Vernon Open<br>
    c/o Cathy Kleiman Des Rosier<br>
    154 Minz Park Circle #4<br>
    West Bend, WI 53095
    
    </div> <!-- END right column -->
<?
include("footer.php");
?>
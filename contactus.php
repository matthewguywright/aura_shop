<style type="text/css">
<!--
.style1 {color: #FFFFFF}
.style2 {color: #000000}
-->
</style>
<?php
	if($_POST['submitForm'])
	{
		$email = $_POST['email'];
		//Email String-----------------------------------------	
		$msg =  "First Name: ".$_POST["fname"]."\n";
		$msg .= "Last Name: ".$_POST["lname"]."\n";
		$msg .= "E-mail: ".$_POST["email"]."\n";
		$msg .= "Phone: ".$_POST["phone"]."\n";
		$msg .= "Type: ".$_POST["type"]."\n";
		$msg .= "Comment: ".$_POST["comment"]."\n";
		
		//Mail Header Information
		$recipient = "aurashop@aol.com";
		$subject = "AURA SHOP WEBSITE SUBMISSION";
		$mailheaders = "From:  ".$_POST["email"]."\n";
		$mailheaders .= "Reply-To: ".$_POST["email"]."\n";
	
		//Send Mail
		mail($recipient, $subject, $msg, $mailheaders);
		$message = "<p>Thanks for your submission! We will be in contact with you shortly.</p>";
	}
?>
        <script type="text/javascript">
<!--
function MM_validateForm() { //v4.0
  if (document.getElementById){
    var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
    for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=document.getElementById(args[i]);
      if (val) { nm=val.name; if ((val=val.value)!="") {
        if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
          if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
        } else if (test!='R') { num = parseFloat(val);
          if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
          if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
            min=test.substring(8,p); max=test.substring(p+1);
            if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
      } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
    } if (errors) alert('The following error(s) occurred:\n'+'Make sure that all fields are completely filled out.');
    document.MM_returnValue = (errors == '');
} }
//-->
        </script>
<h2>Contact Us</h2>
        <table width="609" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="23%" align="center" valign="top" bgcolor="#9966CC"><span class="style1">Address:</span></td>
            <td width="21%" align="center" valign="top" bgcolor="#9966CC"><span class="style1">Phone:</span></td>
            <td width="56%" align="center" valign="top" bgcolor="#9966CC"><span class="style1">E-Mail:</span></td>
          </tr>
          <tr>
            <td width="23%" align="center" valign="top">AURA SHOP&trade;<br />
              2914 Main Street
              <br />
            Santa Monica, CA 90405</td>
            <td width="21%" align="center" valign="top">310.584.9998</td>
            <td width="56%" align="center" valign="top"><table width="100%" border="0" cellspacing="2" cellpadding="0" summary="Contact Table">
              <tr>
                <td align="left" valign="top"><span class="style2">General:</span></td>
                <td align="left" valign="top"><a href="mailto: aurashop@aol.com">AURASHOP@aol.com</a></td>
              </tr>
              <tr>
                <td align="left" valign="top"><span class="style2">Sidney:</span></td>
                <td align="left" valign="top"><a href="mailto: sidneyangel1@aol.com">sidneyangel1@aol.com</a></td>
              </tr>
              <tr>
                <td align="left" valign="top"><span class="style2">Joanna:</span></td>
                <td align="left" valign="top"><a href="mailto: info@joannagarzilli.com">info@joannagarzilli.com</a></td>
              </tr>
              <tr>
                <td align="left" valign="top"><span class="style2">Nicole:</span></td>
                <td align="left" valign="top"><a href="mailto: gurusgrace@aol.com">gurusgrace@aol.com</a></td>
              </tr>
              <tr>
                <td align="left" valign="top"><span class="style2">Alessandra:</span></td>
                <td align="left" valign="top"><a href="mailto: archmetron@aol.com">ArchMetron@aol.com</a></td>
              </tr>
              <tr>
                <td align="left" valign="top"><span class="style2">Anne Marie:</span></td>
                <td align="left" valign="top"><a href="mailto: zummer@mac.com">Zummer@mac.com</a></td>
              </tr>

            </table></td>
          </tr>
        </table>
        
        <br />
        <?php if(isset($message)) { print $message; } ?>
<form action="index.php?p=contactus" method="post" id="contactform" onsubmit="MM_validateForm('fname','','R','lname','','R','email','','RisEmail','phone','','R','comment','','R');return document.MM_returnValue">
<fieldset>
        <legend>E-Mail Information</legend>
              <p><label for="fname">First Name</label><input name="fname" type="text" id="fname" tabindex="1" size="50" /></p>
              <p><label for="lname">Last Name</label><input name="lname" type="text" id="lname" tabindex="2" size="30" /></p>
              <p><label for="email">E-Mail</label><input name="email" type="text" id="email" tabindex="3" size="40" /></p>
              <p><label for="phone">Phone</label><input type="text" name="phone" id="phone" tabindex="4" size="10" /></p>
              <p><label for="type">Inquiry Type</label><select name="type" id="type">
                <option value="Comment" selected="selected">Comment</option>
                <option value="Question">Question</option>
                <option value="Crystals">Crystals</option>
                <option value="Products">Products</option>
                <option value="Service">Service</option>
                <option value="Delivery">Delivery</option>
                <option value="Misc">Misc</option>
                <option value="Workshop">Workshop</option>
                <option value="Website Issue">Website Issue</option>
              </select></p>
              <p><label for="comment">Comment/Qst</label><textarea name="comment" id="comment" cols="30" rows="3" tabindex="10"></textarea></p>
    <p>Serious inquiries only please. AURA SHOP&trade; takes pride in its high standards and customer service. Please only click submit one time. Thank you.</p>
              <p><input type="submit" name="submitForm" value="Send Message" id="submitForm" /></p>
    </fieldset> 
</form>
                    
      
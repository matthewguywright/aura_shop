<?php $message = ''; ?>
<table width="650" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="137" valign="top"><div align="right" style="font-weight: bold">Current Year:</div></td>
    <td valign="top"><div align="left">
      <form id="form1" name="form1" method="post" action="aurashopadmin.php">
        <label for="year"></label>
        <?php
			$sql = 'SELECT * FROM copyright';
			$result = mysql_query($sql);
			$row = mysql_fetch_assoc($result);
		?>
        <input type="text" name="year" id="year" value="<?php echo $row['year']; ?>"/>
      <br />
        <br />
        <center><input type="submit" name="submityear" id="submityear" value="Submit" /></center>
      </form>
      </div></td>
  </tr>
  <tr>
    <td valign="top"><div align="right" style="font-weight: bold">E-Mail Address:</div></td>
      <td width="568" bgcolor="#FFFFFF"><form id="emailchange" name="emailchange" method="post" action="aurashopadmin.php">
        <label for="email">This is the email used for the questions/comments section of the website. There will only be one. This does not pertain to individual users, only to the global e-mail setting that will be used as the submission email. (Visitors will send questions/comments to this email)<br />
        <br />
        New E-Mail Address: </label>
        <input name="email" type="text" id="email" size="35" maxlength="35" />
        <br />
        <br />
        <?php if (isset($emailerror)) { echo $emailerror; } ?><br />
        <br /><?php $sql = "SELECT * FROM contact_email"; $result = mysql_query($sql); $row = mysql_fetch_assoc($result); ?>
        Current E-Mail Address: <?php echo $row['email']; ?><br />
        <br />
        <center><input type="submit" name="emailsubmit" id="emailsubmit" value="Submit New E-Mail Address" onclick="return confirm('Change e-mail address, are you sure?')"/></center>
      </form>    </td>
  </tr>
  <tr>
    <td valign="top"><div align="right" style="font-weight: bold">Users:</div></td>
    <td bgcolor="#FFFFFF"><form id="newadmin" name="newadmin" method="post" action="aurashopadmin.php">
        <label for="username">This field allows you to add additional users to your admin list. Anyone added here will have full admin privelages such as deleting and creating new users.<br />
        <br />
        Username: </label>
        <input name="username" type="text" id="username" size="25" maxlength="25" />
        <br />
        <br />
        <label for="password">Password: </label>
        <input name="password" type="text" id="password" size="25" maxlength="25" />
        <br />
        <br />
        <?php if (isset($newusererror)) { echo $newusererror; } ?><br />
        <br />
        <center>
          <p>
            <input type="submit" name="newusersubmit" id="newusersubmit" value="Create New Admin User" onclick="return confirm('Create new admin, are you sure?')"/>
          </p>
          <p>&nbsp; </p>
        </center>
      </form>    </td>
  </tr>
  <tr>
  	<td align="right" valign="top"><div align="right" style="font-weight: bold">Change Password:</div></td>
    <td align="left" valign="top"><form action="aurashopadmin.php" method="post" enctype="multipart/form-data" name="form2" id="form2">
      <label for="changepw"></label>
      
        <div align="left">
          <p>
            <input name="changepw" type="text" id="changepw" size="35" maxlength="50" />
            <input type="submit" name="submitpassword" id="submitpassword" value="Update Password" />
            <br />  
          </p>
          <center>
          </center>
        </div>
    </form>    </td>
  </tr>
  <tr>
    <td valign="top"><div align="right" style="font-weight: bold">Current Users:</div></td>
    <td>
    <table>
        <tr>
          <th width="75" class="style3" id="delete">Delete</th>
		 <th width="447" id="name">Username</th>
		  </tr>
        <?php
		$query = "SELECT * FROM users";
		$result = mysql_query($query);
		while ($row = mysql_fetch_assoc($result) ) {
			?>
        <tr>
          <td>
            <div align="center"><a href="deleteuser.php?id=<?php echo $row['user_id']; ?>" onclick="return confirm('Delete user, are you sure?')">delete</a></div></td>
			  <td><?php echo $row['username']; ?>	        </td>
	      </tr>
        <?php
		}
	?>
  </table>  </td>
  </tr>
</table>

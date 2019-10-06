<?php $message = ''; ?>
<table width="650" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="124" valign="top"><div align="right"><strong>Add Event:</strong></div></td>
    <td width="581" valign="top">

    </span>
      <form action="aurashopadmin.php" method="post" enctype="multipart/form-data">
  <label for="title">Title: </label>
  <input name="title" type="text" id="title" size="45" />
  <br />
  <br />
  <label for="date">Date: </label>
  <input name="date" type="text" id="date" size="45" />
  <br />
  <br />
  <label for="content">Content: </label>
  <textarea name="content" cols="45" rows="6" id="content"></textarea>
  <br />
  <br />
  <label for="misc">Misc: </label>
  <p>
    <textarea name="misc" cols="45" rows="6" id="misc"></textarea>
    </p>
  <p align="center">
    <input type="submit" name="submitevent" id="submitevent" value="Submit Event" onclick="return confirm('Add Event, are you sure?')"/>
  </p>
  <center></center>
</form></td>
  </tr>
  <tr>
    <td valign="top"><div align="right"><strong>Current Events:</strong></div></td>
    <td><table>
        <tr>
          <th width="75" class="style3" id="delete">Delete</th>
		 <th width="447" id="name">Event List</th>
		  </tr>
        <?php
		$query = "SELECT * FROM events";
		$result = mysql_query($query);
		while ($row = mysql_fetch_assoc($result) ) {
			?>
        <tr>
          <td>
            <div align="center"><a href="aurashopadmin.php?eventid=<?php echo $row['event_id']; ?>" onclick="return confirm('Delete event, are you sure?')">delete</a></div></td>
			  <td><?php echo $row['title']; ?></td>
	      </tr>
        <?php
		}
	?>
  </table></td>
  </tr>
</table>

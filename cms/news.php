<?php $message = ''; ?>
<table width="650" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="124" valign="top"><div align="right"><strong>Add News Story:</strong></div></td>
    <td width="581" valign="top"><div align="left">
      <form name="form1" method="post" action="aurashopadmin.php">
        <label for="title">Title: </label>
        <input type="text" name="title" id="title">
                  <br>
                  <br>
          <label for="author">Author: </label>
          <input type="text" name="author" id="author">
                  <br>
                  <br>
          <label for="content">Content: </label>
          <textarea name="content" id="content" cols="45" rows="5"></textarea>
                  <br>
                  <br>
                  <center><input type="submit" name="submitnews" id="submitnews" value="Submit News Story" onclick="return confirm('Add news story, are you sure?')"></center>
      </form>
      </div></td>
  </tr>
  <tr>
    <td valign="top"><div align="right"><strong>Current Stories:</strong></div></td>
    <td><table>
        <tr>
          <th width="75" class="style3" id="delete">Delete</th>
		 <th width="650" id="name">News Story</th>
		  </tr>
        <?php
		$query = "SELECT * FROM news";
		$result = mysql_query($query);
		while ($row = mysql_fetch_assoc($result) ) {
			?>
        <tr>
          <td>
            <div align="center"><a href="aurashopadmin.php?newsid=<?php echo $row['news_id']; ?>" onclick="return confirm('Delete news story, are you sure?')">delete</a></div></td>
			  <td><?php echo $row['title']; ?></td>
	      </tr>
        <?php
		}
	?>
  </table></td>
  </tr>
</table>

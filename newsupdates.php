<?php require_once("includes/dbconnection.php"); ?>

            <div id="newsfull">
            <h2>News + Updates</h2>
<?php
	$sql = 'SELECT * FROM news ORDER BY date DESC';
	$result = mysql_query($sql);
?>
            	<ul id="newsinfo">
                	<?php while ($row = mysql_fetch_assoc($result)) { ?>
                    	<li>
                        	<h3><?php echo stripslashes($row['title']); ?></h3>
                            <p id="author">Author: <?php echo stripslashes($row['author']); ?></p>
                            <p class="noCaps date">Date: <?php echo stripslashes($row['date']); ?></p>
                            <p><?php echo stripslashes($row['content']); ?></p>
                        </li><br/ >
                    <?php 
					}
					?>
                </ul>
            </div><!--ENDS NEWS DIV-->
                      
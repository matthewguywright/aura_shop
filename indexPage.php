<div id="mission">
            <h2>Welcome to the AURA SHOP™!</h2>
            	<a href="http://www.smgbc.org" target="_blank"><img src="images/greenbusinesscert.jpg" alt="Green Business of Santa Monica" style="float: right" /></a>
           	  <p><img src="images/DropCap.png" id="dropcapA" alt="A" />URA SHOP™ is dedicated to empowering our clients & community.  We show you how to balance your physical, mental, emotional & spiritual energy in a fun & insightful way.  AURA SHOP™ offers an exciting, interactive, holistic environment with incredible tools & services for personal transformation.</p>
 
<p>The AURA SHOP™ promotes peace and harmony of body, mind and spirit, serving and guiding our clients to know and empower themselves.</p> 
 
<p>This is your resource center for self-awareness & self-empowerment, providing the highest quality, most transformational products & services.</p>
 
<p style="font-weight: bold">Store Hours:  Monday through Saturday 11am to 6pm and Sunday 11am to 5pm</p>
          </div>
        
		  <div id="news">
            <h2>Latest News and Updates</h2>
<?php
	$sql = 'SELECT * FROM news ORDER BY date DESC LIMIT 1';
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
                    <a href="index.php?p=newsUpdates" style="padding-left: 20px">More News and Updates...</a>
                </ul>
            
            </div><!--ENDS NEWS DIV-->
            
<?php
	$sql = 'SELECT * FROM events ORDER BY date ASC';
	$result = mysql_query($sql);
?>
<div id="upcomingevents">
	<h2>Upcoming Events</h2>
    	<?php
			while($row = mysql_fetch_assoc($result))
			{
				if($row['date'] < date("Y-m-d") )
				{
					continue;
				} else { ?>
                    <h3><?php echo stripslashes($row['title']); ?></h3>
                    <p class="noCaps date">Event Date: <?php echo stripslashes($row['date']); ?></p>
                    <p><a class="viewMore" href="#">Click to View Event Information</a></p>
                    <div class="contentEvent">Details: <?php echo stripslashes($row['content']); ?></div>
                    <p><?php echo stripslashes($row['misc']); ?></p><br/ ><br />
            		<a href="index.php?p=events" style="padding-left: 20px">More Events...</a> 
           		<?php
				exit;
				}
				?>
     		<?php
			}
			?>       
</div>
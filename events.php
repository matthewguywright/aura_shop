<h2>AURA SHOP™ Events</h2>
		<p>
        Create an unforgettable event by offering your clients and friends a unique, remarkable and life transforming experience.
AURA SHOP™ provides AURA PHOTOS & READINGS that are fun, insightful and personal. Clients, staff and guests will talk about their AURA READING for months to come.</p>
<p>Our trained, certified readers provide enlightening, in-depth or quick AURA READINGS to guests of all ages.
Participants receive a personalized color print of their AURA PHOTO with a description and definition of their colors. Your client’s company name or sponsor logo can appear on the printout at your request.</p>

<p>We are experts at providing AURA READINGS at all types of events, small and large. Some of our clients
include: Paramount Studios, Sony Studios, General Motors, American Express, In Defense of Animals, Magik Show Las Vegas, and Saks Fifth Avenue Beverly Hills.</p>

<?php
	$sql = 'SELECT * FROM events ORDER BY date ASC';
	$result = mysql_query($sql);
?>
<div id="upcomingevents" style="width: 650px">
	<h2>Upcoming Events</h2>
<ul id="newsinfo">
    <?php 
		while ($row = mysql_fetch_assoc($result)) { 
        	if( $row['date'] < date("Y-m-d") )
			{
				continue;
			} else { ?>
        	<li class="expandEvent">
                <h3><?php echo stripslashes($row['title']); ?></h3>
                <p class="noCaps date">Event Date: <?php echo stripslashes($row['date']); ?></p>
                <p><a class="viewMore" href="#">Click to View Event Information</a></p>
                <div class="contentEvent">Details: <?php echo stripslashes($row['content']); ?></div>
                <p><?php echo stripslashes($row['misc']); ?></p><br/ ><br />
        	</li>
        	<?php
			}
			?>
		<?php 
        }
        ?>
</ul>            
</div>
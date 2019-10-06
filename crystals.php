<?php require_once("includes/dbconnection.php"); ?>
	<div id="crysalDiv">
    	<h2>Crystal Properties</h2>
    </div>          
            <div id="crystalcontainer">
              <p>AURA SHOP&trade; houses a very large collection of stunning, high quality crystals of all sizes for use as personal hand held tools or for placement in your environment to enhance your space. We specialize in heart shapes, polished and natural; geodes, big and small; polished bags of stones, massage tools; wands, natural and hand crafted with silver &amp; gold; and uncommon, rare pieces for collectors and crystal energy practitioners. Change your energy, change your life!</p>
                <?php
	$sql = "SELECT * FROM crystals WHERE category='{$id}' ";
	$result = mysql_query($sql);
?>
			    <ul id="selectedCrystals">
                	<?php while ($row = mysql_fetch_assoc($result)) { ?>
                    	<li>
                       
                        	<h3> <?php echo stripslashes($row['name']); ?> </h3>
                            
                    <?php if ($row['pic'] == '') {
							print "No Image Available";
							} else {
                            ?> 
						
							<img src="images/crystalpics/<?php echo stripslashes($row['pic']); ?>" alt="<?php echo stripslashes($row['name']); ?>" />
                            
                            <?php
							} ?> 
							
                            <h4>Chakras:</h4>
                            <p><?php echo stripslashes($row['shakra']); ?></p>
                            <h4>Chemistry:</h4>
                            <p><?php echo stripslashes($row['chemistry']); ?></p>
                        
                        
                       
                        	<p class="description"><?php echo stripslashes($row['description']); ?></p>
                      
                        
                        </li>
                        <br />
                    <?php 
					}
					?>
                    
                </ul>
         	<a href="#top" class="toplink">Back to Top</a>
            </div><!--ENDS CRYSTAL CONTAINER-->

</br></br></br>
<div id="templatemo_main_edited">

			<span style="text-decoration: underline;"> <h2>Search Result for <?php echo "\"".$searchtext."\"";?></h2></span>
            </br>
			<ul>
			<?php
				foreach($result as $value)
				{
					echo "<li>";
					if($id_type=="movie"){?>
					<a href="<?php echo base_url();?>index.php/welcome/movie_fullview/<?php echo $value->mov_id;?>"><b>
					<?php
					echo $value->mov_name. "</b></a>";
					 } 
					else if($id_type=="celebrity"){?>
					<a href="<?php echo base_url();?>index.php/welcome/people_fullview/<?php echo $value->people_id;?>"><b>
					<?php
					echo $value->people_name. "</b></a>";
					 }
					
					echo "</li>";
					
				}
			?>
			</ul>
			
            <div class="cleaner"></div>   
    <div class="cleaner"></div>
</div> <!-- END of templatemo_main -->


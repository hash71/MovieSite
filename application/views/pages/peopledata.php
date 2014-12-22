<body id="subpage">

<div id="templatemo_main">
	<div style="float: left; width: 870px; padding-left: 30px;">
    	<div class="post">
            	
            <h2><?php echo $only_people->people_name; ?> </h2>
			<div>
				<div  align="center">
				<img src="<?php echo base_url();?>assets/movieimage/<?php echo $only_people->image;?>" alt="Image 01" height="480px" width="400px"/>   
				</div>
				<!--here goes the trailer -->
				<div class="cleaner"></div>
				</br>
				</br></br>
				<span style="text-decoration: underline;"> <h4>Biography</h4></span>
				<!-- Story line-->
				<blockquote>
				<p><?php echo $only_people->biography;?> </p>
				</blockquote>
				</br>
				
				
				<span style="text-decoration: underline;"> <h4>Personal Info</h4></span>
				<div id="myedited">
				<div> <!-- movie info -->
				<ol>
					<p style="color: black;"><b>Date of Birth: </b> <?php echo $only_people->dob;?> </a></p>
					<p style="color: black;"><b>Awards: </b> 
					<ul style="color: black;">
					<?php 
					foreach($award_list as $value)
					{ 
						echo "<li>";
						echo $value->award; 
						echo "(".$value->award_year.")"; 
						echo "</li>";
					}?>
					</ul>
					</p>
					<p style="color: black;"><b>Acted Movies: </b> 
					<ul style="color: black;">
					<?php
					foreach($acted_list as $value)
					{ 
						echo "<li>";?>
						<a href="<?php echo base_url();?>index.php/welcome/movie_fullview/<?php echo $value->mov_id;?>">
						<?php
						echo $value->mov_name;
						echo "</a>";
						echo "</li>";
						
					}	
					?>
					</ul>
					</p>
					<p style="color: black;"><b>Directed Movies: </b> 
					<ul style="color: black;">
					<?php
					foreach($directed_list as $value)
					{ 
						echo "<li>";?>
						<a href="<?php echo base_url();?>index.php/welcome/movie_fullview/<?php echo $value->mov_id;?>">
						<?php
						echo $value->mov_name;
						echo "</a>";
						echo "</li>";
					}		
					?>
					</ul>
					</p>
					
				</ol>
				</div>
				</div>
				<div class="cleaner"></div>
			</div>
        </div>
        
        <div class="cleaner h40"></div>
                
    </div>
    
    <div class="cleaner"></div>
</div> <!-- END of templatemo_main -->

</body>
</html>
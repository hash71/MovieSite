<body id="subpage">

<div id="templatemo_main">
	<div style="float: left; width: 870px; padding-left: 30px;">
    	<div class="post">
            	
            <h2><?php echo $only_movie->mov_name; ?> </h2>
			<div>
				<div  style="float: left;">
				<img src="<?php echo base_url();?>assets/movieimage/<?php echo $only_movie->image;?>" alt="Image 01" height="480px" width="380px"/>   
				</div>
				<!--here goes the trailer -->
				<div style="float: right;">
				<h3>Trailer</h3>
				
				
				<iframe width="420" height="345"
				src="<?php echo $only_movie->trailer; ?>">
				</iframe>

				
				</div>
				<div class="cleaner"></div>
				</br>
				</br></br>
				<span style="text-decoration: underline;"> <h4>Story</h4></span>
				<!-- Story line-->
				<blockquote>
				<p><?php echo $only_movie->storyline;?> </p>
				</blockquote>
				</br>
				
				
				<span style="text-decoration: underline;"> <h4>Movie Info</h4></span>
				<div id="myedited">
				<div> <!-- movie info -->
				<ol>
					<p style="color: black;"><b>Director: </b> 
					<a href="<?php echo base_url();?>index.php/welcome/people_fullview/<?php echo $dir_name->people_id;?>"> 
					<?php echo $dir_name->people_name;?> </a></p>
					<p style="color: black;"><b>Release Date: </b> <?php echo $only_movie->released;?> </p>
					<p style="color: black;"><b>Movie Length: </b> <?php echo $only_movie->mov_length;?> min </p>
					<p style="color: black;"><b>Genre: </b> <?php echo $all_genre->genre;?></p>
					<p style="color: black;"><b>Ratings: </b> 
					<?php if($only_movie->rate_number==0)	
						echo 0.0;
						else
							printf("%.1f",$only_movie->rating/$only_movie->rate_number); 
						echo "/10"?></p>
					<p style="color: black;"><b>Awards: </b> <?php $cnt=1; foreach($all_award as $value){ if($cnt>1) echo ", ";echo $value->award; echo "(".$value->award_year.")"; $cnt++;}?></p>
					<p style="color: black;"><b>Casts: </b> 
					<ul style="color: black;">
					<?php
					foreach($all_cast as $value)
					{ 
						echo "<li>";?>
						<a href="<?php echo base_url();?>index.php/welcome/people_fullview/<?php echo $value->people_id;?>">
						<?php
						echo $value->people_name;
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
            <h3>Comments</h3>
                        
              	<div id="comment_section">
                	<ol class="comments first_level">
                                               
                       <?php foreach($all_comment as $value){?> 
                        <li>
                            <div class="comment_box commentbox1">

                                <div class="comment_text">
                                    <div class="comment_author"><?php echo $value->user_name;?> <span class="date"><?php echo $value->comment_time;?></span> </div>
                                    <p><?php echo $value->comment;?></p>
                                </div>
                                
                                <div class="cleaner"></div>
                            </div>  
                            
                        </li>
						<?php } ?>
                         
                </ol>
                <div class="cleaner h20"></div>        
                    
                </div>
                
                <div class="cleaner h20"></div>
                
                <div id="comment_form">
                    <h3>Leave your comment</h3>
                    
                    <form action="<?php echo base_url();?>index.php/welcome/makecomment/<?php echo $only_movie->mov_id;?>/<?php echo $session_user_id;?>" method="post">
						<div class="form_row">
							<label>Name</label><br />
							<input type="text" name="user_name" value="<?php echo $session_user_name;?>" readonly />
						</div>
                        
						<div class="form_row">
							<label>Comment</label><br />
							<textarea  name="comment" rows="" cols=""></textarea>
						</div>
			
						<input type="submit" name="Submit" value="Submit" class="submit_btn" />
					</form>
                
            	</div>
            <div class="cleaner"></div>
    </div>
    
    <div class="cleaner"></div>
</div> <!-- END of templatemo_main -->

</body>
</html>
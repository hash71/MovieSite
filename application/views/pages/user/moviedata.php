<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>scroller</title>
<link href="<?php echo base_url();?>assets/css/webwidget_rating.css" rel="stylesheet" type="text/css"></link>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/webwidget_rating.js"></script>
</head>

<body id="subpage">
<script language="javascript" type="text/javascript">
            function test(value){
                alert("This rating's value is "+value);
            }
            $(function() {
                $("#my_text_input").webwidget_rating({
                    rating_star_length: '10',
                    rating_default_value: '0',
                    rating_function_name: '',//this is function name for click
                    directory: 'images'
                });
            });
        </script>

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
				<?php if($user_rating=='undefined')
				{
				
					echo "<form action=\""; echo base_url();echo "index.php/welcome/rate_the_movie/";echo $only_movie->mov_id;echo "/";echo $session_user_id;echo "\" method=\"post\" >";
					echo "<input type=\"text\" name=\"my_text_input\" value=\"\" size=\"1\" id=\"my_text_input\" style=\"background-color: black; color: white;\" readonly>";
					echo "<input type=\"submit\" name=\"submit\" value=\"Rate it\">";
					echo "</form>";
				}
				else
				{
					echo "<p style=\"color: red;\"><b>You already Rate this movie->".$user_rating->check_rate."</b></p>";
				}
				?>
					
				</br></br>
				<?php 
				if($user_fav=='undefined')
				{
					echo "<form action=\""; echo base_url();echo "index.php/welcome/make_fav/";echo $only_movie->mov_id;echo "/";echo $session_user_id;echo "\" method=\"post\" >";
					echo "<pre>		                                <input type=\"submit\" name=\"favourit\" value=\"Add to Favourite\"></pre>";
					echo "</form>";
				}
				else
				{
					echo "<p align=\"center\" style=\"color: blue;\"><b>This Movie is on your Favourite List</b></p>";
				}
				?>
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
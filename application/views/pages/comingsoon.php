</br></br></br>
<div id="templatemo_main_edited">
	<div id="content">
		<div align="center">
		<h2>Coming Soon(Top 10)</h2></br></br>
		</div>
		
    	<div class="post">
            
			<?php
			foreach($coming as $value){?>
			
			<h3><a href="<?php echo base_url();?>index.php/welcome/movie_fullview/<?php echo $value->mov_id;?>"><?php echo $value->mov_name;?></a></h3>
			<img src="<?php echo base_url(); ?>assets/movieimage/<?php echo $value->image;?>" alt="Image 01" height="220" width="140" style="left: 230px;position: relative;"/>    
			<p align="center" style="color: black;"><b>Rating: 
			<?php 
				if($value->rate_number==0)
					echo "0.0";
				else
					printf("%.1f",$value->rating/$value->rate_number);
			?>
		<?php }?>
		</div>
         
        <div class="cleaner"></div>
    </div>
    
    
    <div class="cleaner"></div>
</div> <!-- END of templatemo_main -->







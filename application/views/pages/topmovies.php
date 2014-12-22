
</br></br></br>
<div id="templatemo_main_edited">

			<span style="text-decoration: underline;"> <h2>Top Movies(by ratings)</h2></span>
            </br>
			<table border="1" bordercolor="FFCC00" style="background-color:FFFFCC" width="500" cellpadding="3" cellspacing="3" align="center">
			
			<?php 
				$cnt=1;
				
				echo "<tr align=\"center\" style=\"color: red;\"><td> <b>Rank</b> </td> <td> <b>Image</b> </td> <td align=\"center\"><b> Movie</b> </td> <td> <b>Release Date</b> </td> <td><b> Rating </b> </td></tr> ";
				
				foreach($movielist as $value)
				{
					echo "<tr>";
					echo "<td>".$cnt."</td>";
					echo "<td>";?>
					<a href="<?php echo base_url();?>index.php/welcome/movie_fullview/<?php echo $value->mov_id;?>">
					<img src="<?php echo base_url();?>assets/movieimage/<?php echo $value->image;?>" alt="Image 01" height="50px" width="35px" align="center"/>   
					</a>
					<?php echo "</td>";
					echo "<td>";?>
					<a href="<?php echo base_url();?>index.php/welcome/movie_fullview/<?php echo $value->mov_id;?>"><b>
					<?php echo $value->mov_name. "</b></a></td>";
					echo "<td>".$value->released."</td>";
					if($value->rate_number==0)
						echo "<td>0.0</td>";
					else
					{
						echo "<td>";
						printf("%.1f",$value->rating/$value->rate_number);
						echo "</td>";
					}
					
					
					echo "</tr>";
					$cnt++;
				}
			?>
			
			</table>
            <div class="cleaner"></div>   
    <div class="cleaner"></div>
</div> <!-- END of templatemo_main -->

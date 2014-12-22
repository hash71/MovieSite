</br></br>

<div id="templatemo_main_edited">
	
    <h2>Insert Movie Information</h2>
        <div class="half float_l">
            <div id="contact_form">
               <form method="post" name="contact" action="<?php echo base_url();?>index.php/welcome/insert_query" >
                    Movie Name: <input type="text" name="mov_name" value=""> </br>
					Release Date: <input type="text" name="released" value=""></br>
					<!-- <input type="submit" name="validate" value="Validate the Entry"></br> -->
					Director Name: <input type="text" name="dir_name" value=""></br>
					Cast's name: <input type="text" name="cast_name" value=""></br>(use '.' delimiter to insert more than one value)</br>
					Genre:	<input type="text" name="genre" value=""></br>(use '.' delimiter to insert more than one value)</br>
					Movie Length: <input type="text" name="mov_length" value=""></br>
					Image: <input type="text" name="image" value=""></br>
					Storyline: <input type="text" name="storyline" value=""></br>
					Trailer: <input type="text" name="trailer" value=""> </br>
					<input type="submit" name="submit" value="Submit">
            	</form>
            </div>
		</div>
        
    
    <div class="cleaner"></div>
</div> <!-- END of templatemo_main -->

</html>
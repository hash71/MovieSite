<body id="home">
<div id="templatemo_slider">
<?php echo "</br></br></br></br></br>"; ?>
</div>
<div id="templatemo_main" >
    <form name="loginform" action="<?php echo base_url();?>index.php/welcome/userreg" method='post'>
	<pre style="margin-left: 230px;">
	        Username: <input type="text" name="user_name" value=""></br></br>
	        Password: <input type="password" name="password" value=""></br></br>
	<!--Confirm Password: <input type="password" name="password" value=""></br></br> -->
	           Email: <input type="text" name="email" value=""></br></br>
			      <input type="submit" name="submit" value="Register">
	</pre>
	</form>
	<?php if($msg=="alr_signed")	echo "Already Registered,Try to login.";	?>

</div> <!-- END of templatemo_main -->
<?php for($i=1;$i<=15;$i++)	echo "</br>"; ?>	
</body>
</html>
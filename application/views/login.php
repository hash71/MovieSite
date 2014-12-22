<body id="home">
<div id="templatemo_slider">
<?php echo "</br></br></br></br></br>"; ?>
</div>
<div id="templatemo_main" align="center" >
	
    <form name="loginform" action="<?php echo base_url();?>index.php/welcome/logincheck" method='post'>
	Username: <input type="text" name="user_name" value=""></br></br>
	Password: <input type="password" name="password" value=""></br></br>
	<input type="submit" name="submit" value="Login">
	</form>
    
</div> <!-- END of templatemo_main -->
<?php for($i=1;$i<=15;$i++)	echo "</br>"; ?>	
</body>
</html>
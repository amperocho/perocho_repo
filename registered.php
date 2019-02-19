<html>
<body>
<?php
 
if ($_POST["password"] != $_POST["confirm_password"]) {
echo("Error... Passwords do not match");
exit;
}
 
?>
  	<h1>CONGRATULATIONS! <br> <?php echo $_POST["name"]; ?></h1><br>
	<h2>You have successfully registered!!!</h2>  


</body>
</html>
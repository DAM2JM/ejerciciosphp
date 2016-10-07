<DOCTYPE html>
<html>
<head></head>
<body>
	
	<form action="<?php  $_SERVER['PHP_SELF'] ?>" method="post">
		<label>Nombre: <input type="text" name="nombre" /></label>
		<br/>
		<label>telefono: <input type="text" name="tel" /></label>
		<br/>
		<input type="submit" name="submit" >
	</form>
	<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	include('usuario.php');
	if(isset($_POST['submit'])) 
	{ 
		$nom=$_POST['nombre'];
	    $tel=$_POST['tel'];
	    if(empty($nom) and empty($tel)){
	    	echo "Nombre sin rellenar<br>";
	    	echo "Telefono sin rellenar<br>";
	    }
	    else{
			$usu=new usuario($nom,$tel);
	    	echo "Nombre:".$usu->getNombre()." <br>";
	    	echo "Telefono:".$usu->getNombre()." <br>";
	    }
	    //echo "User Has submitted the form and entered this name : <b> $name </b>";
	    //echo "<br>You can use the following form again to enter a new name."; 
	}
	?>
</body>
</html>
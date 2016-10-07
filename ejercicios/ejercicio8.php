<DOCTYPE html>
<html>
<body>
	<form action="<?php  $_SERVER['PHP_SELF'] ?>" method="post">
		<label>Nombre: <input type="text" name="nombre" /></label>
		<br/>
		<label>telefono: <input type="text" name="tel" /></label>
		<br/>
		<input type="submit" name="submit" >
	</form>

	<?php
	if(isset($_POST['submit'])) 
	{ 
	    $name = $_POST['name'];
	    $nom=$_POST['nombre'];
	    $tel=$_POST['tel'];
	    if(empty($nom)){
	    	echo "Nombre sin rellenar<br>";
	    }
	    else{
	    	echo "Nombre: ".$nom."<br>";
	    }
	    if(empty($tel)){
	    	echo "Telefono sin rellenar<br>";
	    }
	    else{
	    	echo "Telefono: ".$tel."<br>";
	    }
	    //echo "User Has submitted the form and entered this name : <b> $name </b>";
	    //echo "<br>You can use the following form again to enter a new name."; 
	}
	?>
</body>

</html>
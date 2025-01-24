<?php
include("con_db123.php");
if (isset($_POST['register'])) {
	if (strlen($_POST['Id']) >= 1 && strlen($_POST['nom']) >=1 && strlen($_POST['ape']) >=1) {
		$Id = trim($_POST['	Id']);
		$nom = trim($_POST['nom']);
		$ape = trim($_POST['ape']);
		
		$consulta = "INSERT INTO inicio (Id,nom,ape) VALUES ('$Id',$nom','$ape')";
		$resultado = mysqli_query($conex,$consulta);
		if ($resultado) {
			?>
			<h3 class="o">¡Bienvenido!</h3>
		<?php
	} else {
		?>
		<h3 class="ba">¡Ups ha ocurrido un error!</h3>
		<?php
	    }
	} else {
		?>
		<h3 class="bd">¡Por favor complete los campos!</h3>
		<?php
		
	 }
   } 
?>
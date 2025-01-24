<?php
include("con_bd_luan.php");
if (isset($_POST['register'])) {
	if (strlen($_POST['id']) >= 1 && strlen($_POST['img']) >=1 && strlen($_POST['cod']) >=1 && strlen($_POST['nom']) >=1 && strlen($_POST['pre']) >=1) {
		$id = trim($_POST['id']);
		$img = trim($_POST['img']);
		$cod = trim($_POST['cod']);
		$nom = trim($_POST['nom']);
		$pre = trim($_POST['pre']);
		$consulta = "INSERT INTO autos (id,img,cod,nom,pre) VALUES ('$id','$img','$cod','$nom','$pre')";
		$resultado = mysqli_query($conex,$consulta);
		if ($resultado) {
			?>
			<h3 class="ok">¡Haz registrado el auto correctamente!</h3>
		<?php
	} else {
		?>
		<h3 class="bad">¡Ups ha ocurrido un error!</h3>
		<?php
	    }
	} else {
		?>
		<h3 class="bad">¡Por favor complete los campos!</h3>
		<?php
		
	 }
   } 
?>
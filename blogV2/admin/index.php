<?php

include "../includes/funciones.php";
include "../includes/config.php";


  
include "../includes/header.php";

if (!isAdmin()) {
    redirect('../index.php');
}

//var_dump($conn->query("SELECT COUNT(*) as count FROM usuarios")->fetch_assoc()['count']);

$stats = [
    'usuarios' => $conn->query("SELECT COUNT(*) as count FROM usuarios")->fetch_assoc()['count'],
    'articulos' => $conn->query("SELECT COUNT(*) as count FROM articulos")->fetch_assoc()['count'],
    'comentarios' => $conn->query("SELECT COUNT(*) as count FROM comentarios")->fetch_assoc()['count']
];


?>
<h2 class="text-center mb-5">Administrador</h2>

<div class="container">
	<div class="row justify-content-evenly text-center">
		<div class="col-4">Cant Usuarios: <?php echo $stats['usuarios'] ?></div>
		<div class="col-4">Cant Articulos: <?php echo $stats['articulos'] ?> </div>
		<div class="col-4">Cant Comentarios: <?php echo $stats['comentarios'] ?></div>
		<div class="col-4"><a href="articulos.php" class="btn btn-primary mt-4" >Articulos</a>
		</div>
		<div class="col-4"><a href="usuarios.php" class="btn btn-primary mt-4" >Usuarios</a>
		</div>
		<div class="col-4"><a href="comentarios.php" class="btn btn-primary mt-4" >Comentarios</a>
		</div>
	</div>
	
</div>


 <?php
   include "../includes/footer.php";
 ?>
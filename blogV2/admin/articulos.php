<?php

include "../includes/funciones.php";
include "../includes/config.php";  
include "../includes/header.php";

if (!isAdmin()) {
    redirect('../index.php');
}

// Obtener los últimos artículos
$result = $conn->query("SELECT a.*, u.nombre as autor FROM articulos AS a , usuarios AS u WHERE a.usuario_id = u.id ORDER BY a.created_at DESC");


?>
<h2 class="text-center my-3">Articulos</h2>
<div class="my-4 ms-5"><a href="crear-articulo.php" class="btn btn-primary mt-4" >CREAR ARTICULO</a></div>
<div align="center">
	
	<table  class="table">
	    <thead>
	        <tr>
	            <th>ID</th>
	            <th>Imagen</th>
	            <th>Título</th>
	            <th>Nombre imagen</th>
	            <th>Autor</th>
	            <th>Fecha</th>
	            <th>Acciones</th>
	        </tr>
	    </thead>
	    <tbody>
	        <?php
	        if ($result->num_rows > 0) {
	            while($row = $result->fetch_assoc()) {
	                echo "<tr>";
	                echo "<td>" . $row['id'] . "</td>";
	                echo "<td> <img width='50px' height='50px' src='../img/".$row['imagen'] . " ' </td>";
	                echo "<td>" . $row['titulo'] . "</td>";
	                echo "<td>" . $row['imagen'] . "</td>";
	                echo "<td>" . $row['autor'] . "</td>";
	                echo "<td>" . $row['created_at'] . "</td>";
	                echo "<td>
	                         <a href='?editar=" . $row['id'] . "' class='btn btn-sm btn-warning'>Editar</a>
	                        <a href='?eliminar=" . $row['id'] . "' class='btn btn-sm btn-danger' onclick='return confirm(\"¿Estás seguro?\")'>Eliminar</a>
	                      </td>";
	                echo "</tr>";
	            }
	        } else {
	            echo "<tr><td colspan='5'>No hay artículos</td></tr>";
	        }
	        ?>
	    </tbody>
	</table>
</div>


 <?php
   include "../includes/footer.php";
 ?>
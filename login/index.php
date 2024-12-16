<?php

include 'conexion.php';


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center mt-5">Login </h1>
    <form action="" method="POST">
	    <div class="m-5">
	    	<label for="exampleFormControlInput1" class="form-label">Email address</label>
			<input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com">
		</div>
		<div class="m-5">
			<label for="exampleFormControlPass" class="form-label">Example textarea</label>
			<input type="password" class="form-control" name = "password" id="exampleFormControlPass" placeholder="*****">
		</div>
		<div class="m-2 text-center">
			<button type="submit" class="btn btn-success btn-lg">Login</button>
		</div>

	</form>

	<?php

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				$email = $_POST['email'];
				$password = $_POST['password'];
				
				$sql = "SELECT id, nombre, roll, password FROM usuarios WHERE email = '$email' ; ";

				$usuario = $conn->query($sql);

				

				if($usuario->num_rows == 1){
					  $user = $usuario->fetch_assoc();
					  echo '<pre>';
						print_r($user);
						echo '</pre>';
					  if($user['password'] == $password){
					  	 echo "<h3>Usuario registrado</h3> ";
					  }else{
					  	echo "<h3>password no encontrado</h3>";
					  }
				}else{
					echo "<h3>Usuario no registrado</h3>";
				}
		}

	?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
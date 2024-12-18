<?php

include "includes/config.php";
include "includes/funciones.php";

   if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['registro']) ){
                $nombre = $conn->real_escape_string($_POST['nombre']);
                $email = $conn->real_escape_string($_POST['email']);
                $password = $conn->real_escape_string($_POST['password']);
                $mensaje = "";

                // Verificar si el email ya existe
                $sqlCheck = "SELECT * FROM usuarios WHERE email = '$email'";
                $resultCheck = $conn->query($sqlCheck);

                if ($resultCheck->num_rows == 1) {
                    $mensaje =   "<h2 class='text-center'>Ya usted esta registrado !!!!</h2>";
                }else{
 
                    if( empty($nombre)  or empty($email) or empty($password) ){
                        $mensaje =  " <h2 class='text-center'> Error, algunos campos están vacíos </h2>";
                    }else{
                        
                        $sql = "INSERT INTO usuarios (nombre, email, password) VALUES ('$nombre', '$email', '$password');";

                        if ($conn->query($sql) === TRUE) {
                            $mensaje =  "<h2 class='text-center'>Registro exitoso. Ahora puedes <a href='login.php'>iniciar sesión</a>.</h2>";
                                
                        } else {
                               $mensaje =  "<h2 class='text-center'>Error AEP: " . $conn->error . "</h2>";
                        }
                    }    
                }
                   
            }

    include "includes/header.php"
?>
        <!-- Main Content-->
        <main class="mb-4">
            <h2 class="text-center">Registro</h2>
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        
                        <div class="my-2">
                            <!-- * * * * * * * * * * * * * * *-->
                            <!-- * * SB Forms Contact Form * *-->
                            <!-- * * * * * * * * * * * * * * *-->
                            <!-- This form is pre-integrated with SB Forms.-->
                            <!-- To make this form functional, sign up at-->
                            <!-- https://startbootstrap.com/solution/contact-forms-->
                            <!-- to get an API token!-->
                            <form id="contactForm"  method="POST" >
                                <div class="form-floating">
                                    <input class="form-control" name="nombre" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                    <label for="name">Nombre</label>
                                    <div class="invalid-feedback" >Nombre es requerido.</div>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" name = "email" id="email" type="email" placeholder="Enter your email..." data-sb-validations="required,email" />
                                    <label for="email">Email</label>
                                    <div class="invalid-feedback" data-sb-feedback="email:required">Email es requerido.</div>
                                    <div class="invalid-feedback" >Email is not valid.</div>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" id="phone" name="password" type="password" placeholder="Password..." data-sb-validations="required" />
                                    <label for="phone">Password</label>
                                    <div class="invalid-feedback" >Password es requerido</div>
                                </div>
                                
                                <br />
                                <!-- Submit success message-->
                                <!---->
                                <!-- This is what your users will see when the form-->
                                <!-- has successfully submitted-->
                               
                               
                                <button class="btn btn-primary text-uppercase " name= "registro" id="" type="submit">Send</button>
                            </form>
                            <?php
                                if(isset($mensaje)){
                                    echo $mensaje;
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </main>
          <?php
           include "includes/footer.php"
         ?>
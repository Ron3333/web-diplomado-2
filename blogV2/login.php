<?php

include "includes/funciones.php";
include "includes/config.php";

   if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login']) ){

        $email = $conn->real_escape_string($_POST['email']);
        $password = $conn->real_escape_string($_POST['password']);
        $mensaje = "";

        $sql = "SELECT id, nombre, password, rol FROM usuarios WHERE email = '$email'";
        $result = $conn->query($sql);

        if(  empty($email) or empty($password) ){
            $mensaje =  " <h2 class='text-center'> Error, algunos campos están vacíos </h2>";
          
        }else{
               
            if ($result->num_rows == 1) {
                    //echo "<h1>hola</h1>"; 
                    $user = $result->fetch_assoc();
                    if ($password == $user['password']){
                        $_SESSION['user_id'] = $user['id'];
                        $_SESSION['user_name'] = $user['nombre'];
                        $_SESSION['user_role'] = $user['rol'];
                        
                        redirect('index.php');
                    } else {
                        $mensaje = "<h2 class='text-center'>Contraseña incorrecta.</h2>";
                    }

            }else{
                        $mensaje = "<h2 class='text-center'>Usuario no existe.</h2>";
            } 
        }            
    }

include "includes/header.php"
?>
        <!-- Main Content-->
        <main class="mb-4">
            <h2 class="text-center">Login</h2>
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
                               
                               
                                <button class="btn btn-primary text-uppercase " name="login" id="" type="submit">Send</button>
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
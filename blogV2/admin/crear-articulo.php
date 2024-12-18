<?php

include "../includes/funciones.php";
include "../includes/config.php";

include "../includes/header.php";

if (!isAdmin()) {
    redirect('../index.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['crear'])) {

    $titulo = $conn->real_escape_string($_POST['titulo']);
    $contenido = $conn->real_escape_string($_POST['contenido']);
    $usuario_id = $_SESSION['user_id'];
     $mensaje ="";

    if ($_FILES["imagen"]["error"] > 0) {
        $mensaje = "Error, ningún archivo de imagen esta seleccionado";
    }else{
        if(empty($titulo) || empty($contenido) ){
            $mensaje = "Error, algunos campos están vacíos";
        }else{  

            $image = $_FILES['imagen']['name'];
            $imageArr = explode('.', $image);
            $rand = rand(1000, 99999);
            $newImageName = $imageArr[0] .$rand . '.' . $imageArr[1];
            $rutaFinal = "../img/" . $newImageName;
            move_uploaded_file($_FILES['imagen']['tmp_name'] ,$rutaFinal);

                $sql = "INSERT INTO articulos (titulo, contenido,imagen, usuario_id) VALUES ('$titulo', '$contenido','$newImageName', $usuario_id)";
                if ($conn->query($sql) === TRUE) {
                     $mensaje = "<div class='alert alert-success'>Artículo creado con éxito.</div>";
                } else {
                     $mensaje = "<div class='alert alert-danger'>Error: " . $conn->error . "</div>";
                }
        }
    }

}

?>
        <!-- Main Content-->
        <main class="mb-4">
            <h2 class="text-center">Crear Articulos</h2>
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="my-2">
                            <form id="contactForm"  method="POST" enctype="multipart/form-data" >
                                <div class="form-floating">
                                    <input class="form-control" name="titulo" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                    <label for="name">Titulo</label>
                                    <div class="invalid-feedback" >Titulo es requerido.</div>
                                </div>
                                <div class="form-floating">
                                    <textarea class="form-control" name="contenido" placeholder="" id="floatingTextarea"></textarea>
                                    <label for="floatingTextarea">Contenido</label>
                                    <div class="invalid-feedback" >Contenido  es requerido</div>
                                </div>
                                <div class="mt-3">
                                     <label for="formFileLg" class="form-label">Subir imagen</label>
                                     <input class="form-control form-control-lg" id="formFileLg" name="imagen" type="file">
                                </div>
                                
                                <br />
                                <!-- Submit success message-->
                                <!---->
                                <!-- This is what your users will see when the form-->
                                <!-- has successfully submitted-->
                               
                               
                                <button class="btn btn-primary text-uppercase " name= "crear" id="" type="submit">GUARDAR</button>
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
   include "../includes/footer.php";
 ?>
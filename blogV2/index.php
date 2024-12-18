<?php

include "includes/funciones.php";
include "includes/config.php";

$sql  = "SELECT * FROM articulos ; ";

$articulos = $conn->query($sql);

/*
echo "<pre>";
print_r($articulos);
echo "</pre>";
*/

  
include "includes/header.php"
?>

      
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                <?php

                    if($articulos->num_rows > 0){

                        while($row = $articulos->fetch_assoc()){

                        echo " <div class='post-preview'> ";
                        echo " <a href='post.html'> ";
                        echo " <h2 class='post-title'>".$row['titulo']."</h2>";
                        echo "    <h3 class='post-subtitle'>".$row['contenido']."</h3> </a>";
                        echo "  <p class='post-meta'>".$row['created_at']."</p> </div>";
                        echo "<hr class='my-4' />";

                        }
                    }else{
                        echo "<h1> No hay articulos </h1>";
                    }
                    $conn->close()
                ?>

                    
                    <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
                </div>
            </div>
        </div>
       <?php
       include "includes/footer.php"
   ?>
<?php

    require 'php/funciones.php';
    $obj = new Funciones();

    //Obtener registros

    $publicaciones = $obj->getPublicaciones();
    
    // echo '<pre>', print_r($publicaciones), '</pre>';



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS con PHP</title>
        <!-- Custom Estilos -->
        <link href="css/estilos.css" rel="stylesheet" />
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
 
</head>
<body>
    <nav>

    </nav>

    <div class="container">
        <h2>Mi CMS con PHP</h2>

        <div class="row">
            <?php foreach($publicaciones as $publicacion): ?>
                <div class="col-lg-4 col-md-4">
                    <h3><?php echo $publicacion['titulo']; ?></h3>
                    <p><?php echo $publicacion['contenido']; ?></p>
                    <?php  // echo $publicacion['blog_id'];?>
                    <a href="publicacion.php?blog_id=<?php echo $publicacion['blog_id'];?>">Ver mas</a>

                </div>

            <?php endforeach; ?>
        </div>




    </div>
        <!-- Core theme JS  (includes Bootstrap)-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" defer></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js" defer></script>

        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    
</body>

</html>
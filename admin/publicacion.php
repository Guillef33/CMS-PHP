<?php
session_start ();

if(isset($_SESSION['admin'])) {
    require '../php/funciones.php';
    $obj = new Funciones();

    if(isset($_POST['titulo'], $_POST['contenido'])){
        $subir = $obj->subirPublicacion($_POST['titulo'], $_POST['contenido'], $_SESSION['admin']);
        
        if ($subir == true){
            echo '<span class="alert alert-success">Articulo dado de alta</span>';

        }
    }


    



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Nueva Publicacion</title>
</head>
<body>

<form action="" method="post">
    <input type="text" name="titulo" />
    <textarea name="contenido" class="form-control" placeholder="Contenido" id="" cols="30" rows="10"></textarea>
    <input type="submit" name="btn btn-info pull-right" value="Subir "/>


</form>
    
</body>
</html>

<?php }else {header('Location: index.php');}
?>
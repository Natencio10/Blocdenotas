<!DOCTYPE html>
<html lang="en">
<head><title>CREAR ARCHIVO TXT Y CARPETA</title></head>
<body>
<?php
if (isset($_POST['btn']) && $_POST['btn'] == 'Crear Archivo txt') {
    $archivo = fopen("ArchivoTXT.txt", "w+b");
    if ($archivo == false) {
        echo "Error al crear el archivo";
    } else {
        echo "El archivo ha sido creado";
    }

    fclose($archivo);

}
if (isset($_POST['btn']) && $_POST['btn'] == 'Crear Carpeta'){
    $directorio = "Carpeta";
    $dirmake = mkdir("$directorio", 0777);
    if ($directorio == false){
        echo "Error al crear la carpeta";
    } else {
        echo "La carpeta ha sido creada";
    }
}
?>
</body>
</html>

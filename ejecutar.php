<!DOCTYPE html>
<html lang="en">
<head><title>CALCULO DEL AREA DEL OCTAGONO</title></head>
<body>
<?php
if (isset($_POST['btn']) && $_POST['btn'] == 'Crear Archivo txt') {
    $archivo = fopen("ArchivoTXT", "w+b");
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
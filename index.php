<?php
// Abrir la carpeta donde se encuentran los archivos
$dir = opendir("/ruta/a/la/carpeta");

// Leer los archivos de la carpeta uno por uno
while (($file = readdir($dir)) !== false) {
  // Verificar si el archivo no es un archivo .php
  if (pathinfo($file, PATHINFO_EXTENSION) != "php") {
    // Mostrar el nombre del archivo en pantalla
    echo "$file<br>";
  }
}

// Cerrar la carpeta
closedir($dir);

# liste los archivos de una carpeta sin incluir los .php (por ejemplo)

El código utiliza la función opendir para abrir la carpeta donde se encuentran los archivos, y luego utiliza un bucle while para leer cada archivo de la carpeta uno por uno. Dentro del bucle, se utiliza la función pathinfo para verificar si el archivo no es un archivo .php, y si es así, se muestra el nombre del archivo en pantalla. Finalmente, se cierra la carpeta utilizando la función closedir.

Para utilizar este código, se debe reemplazar la ruta de la carpeta en la línea <code>$dir</code>

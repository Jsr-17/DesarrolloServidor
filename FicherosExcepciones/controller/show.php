<?php
//ruta del fichero
$fichero = "../data/inventory.csv";

//primero compruebo que el archivo exista en el caso de que no envio un mensaje en negrita de que no existen los datos
if (!is_file($fichero)) {
    echo "<b>No existen Datos crea algunos primero!!</b>";
} else {
    try {
        //ruta del archivo en este caso solo lectura
        $flujo = fopen($fichero, "rb");

        //Abrimos el csv y separamos por , cada uno de los elementos
        $datos = fgetcsv($flujo, 1000, ",");

        //En el caso de que el fichero este vacío
        if (empty($datos)) {
            //borramos el archivo
            try {
                unlink($fichero);
                echo "El archivo  ha sido eliminado debido a que estaba vacio";
            } catch (Exception $e) {
                //lanzamos un mensaje de error al no poder borrar el archivo
                throw new Exception("No se puede borrar el archivo.");
            }
        }
        //informamos que está vacio el archivo junto a la excepción 
        if ($datos === false) {
            throw new Exception("Archivo vacíot");
        }


        //imprime la tabla
        print("<table>");
        print("<thead>");
        //Recorre la primera parte de la tabla es decir los indices id , nombre etc
        foreach ($datos as $dato) {
            print("<td>" . htmlspecialchars($dato) . "</td>");
        }

        print("</thead>");

        print("<tbody>");
        //Imprime las celdas de la tabla
        while (($datos = fgetcsv($flujo, 1000, ",")) !== FALSE) {
            print("<tr>");
            foreach ($datos as $dato) {
                print("<td>" . htmlspecialchars($dato) . "</td>");
            }
            print("</tr>");
        }
        print("</tbody>");
    } catch (Exception $e) {
        //Muestra la Excepcion que pueda ocasionar y no esté controlada
        throw  $e;
    }
}

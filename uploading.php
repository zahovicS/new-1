<?php 

	//var_dump($_FILES);
	echo "Nombre del archivo: ",$_FILES['archivo']{'name'};
	echo "<br/>";

	$dir_subida = 'subidas/';
	$fichero_subido = $dir_subida . basename($_FILES['archivo']['name']);

	if (move_uploaded_file($_FILES['archivo']['tmp_name'], $fichero_subido)) {
	    echo "Se subió con éxito.\n";
	} else {
	    echo "Error, no se pudo subir si archivo.\n";
	}
?>
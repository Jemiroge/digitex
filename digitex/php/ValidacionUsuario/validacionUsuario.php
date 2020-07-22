<?php
$usuario= (isset($_POST['usuario'])    ? $_POST['usuario']    : '');  

error_reporting(0);

$leer = fopen("../../txt/usuarios/usuario1/$usuario/$usuario.txt","rb");
$guardar1 = fread($leer, filesize("../../txt/usuarios/usuario1/$usuario/$usuario.txt"));

if($guardar1===$usuario){

	echo "ya existe";

	//$actividad=fopen("../../txt/usuarios/usuario1/$usuario/actividad.txt", "a");
   // $contenido="activo";
    //fwrite ($actividad,$contenido);


       header("location:../../index/tipifica1.php");
 
//echo "$guardar1\n\n\n"; 

}else{
	echo "no existe se crea ";
	mkdir("../../txt/usuarios/usuario1/$usuario", 0700 , true);
	$guardar=fopen("../../txt/usuarios/usuario1/$usuario/$usuario.txt", "a");

    $contenido="$usuario";
    fwrite ($guardar,$contenido);

    //$actividad=fopen("../../txt/usuarios/usuario1/$usuario/actividad.txt", "a");
    //$contenido="activo";
    //fwrite ($actividad,$contenido);

}


    ?>
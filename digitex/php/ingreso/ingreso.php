<?php 



 $usuario= (isset($_POST['usuario'])    ? $_POST['usuario']    : ''); 
 $contrasena= (isset($_POST['contrasena'])    ? $_POST['contrasena']    : '');


// $dia=date("d");
// $mes=date("j");
 //$semanadia =date("l");
 //setlocale(LC_ALL, 'co_CO');
 //$h1=('%H+3');
 //bool date_default_timezone_set (string $timezone_identifier );
 //$fecha = strftime("Hoy es %A día %d de %B hora: %H :%M :%S  $h1"  );
 
 //echo '<script type="text/javascript">alert("datos enviados a la base ok")</script>';
 date_default_timezone_set ('America/Bogota') ;
 setlocale(LC_ALL,"es_ES");
 //$fecha=strftime("Hoy es %A día %d de %B hora: %H :%M :%S"  );
 
$fecha=strftime("creado día %d mes %m año %Y hora: %H :%M :%S"); 	
$fecha1=strftime("%d%m%Y");
$hora=strftime("%H :%M :%S");
$nombre = $usuario;
$nombre1 = $contrasena;

	session_start();
	$_SESSION['nombre']=$nombre;
	$_SESSION['nombre1']=$nombre1;

//$archivo = file_get_contents("../../txt/usuarios/usauriospermiso/usuariospermiso.txt");

//$posicion = strpos($archivo, $nombre);
//$largo = strlen($nombre);
//$verificado = substr($archivo,$posicion,$largo);






$contenido="
usuario : $nombre-> contraseña:$nombre1 // conexion: $hora  

---------------------------------------------------------------------------";

    //$archivo=fopen("../../txt/$factura.txt", "w");
//if(error_log('no tiene datos disponibles'))
//mkdir("../txt/tipificacion/$fecha1", 0700 , true);
 //$carpeta = mkdir("../txt/tipificacion/$fecha1", 0700 , true);
$carpeta="../../txt/usuarios/$fecha1/$nombre";
error_reporting(0);


		
		if($carpeta) {

		mkdir("../../txt/usuarios/$fecha1/$nombre", 0700 , true);
		$guardar=fopen("../../txt/usuarios/$fecha1/$nombre/$fecha1.$nombre.guardar.txt", "a");
		fwrite ($guardar,$contenido);

		echo header("location:../../index/tipifica1.php");
		echo "<script type='text/javascript'>";
		echo "window.history.back(0)"; 
		     //echo "<script>alert('aaa');</script>";
		echo "</script>";
		    //echo header("location:eaab.php");
		            }
	     
  
  ?>
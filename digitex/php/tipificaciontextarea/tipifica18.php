<?php 

 $f18inp1= (isset($_POST['f18inp1'])    ? $_POST['f18inp1']    : '');
 $f18te2= (isset($_POST['f18te2'])    ? $_POST['f18te2']    : ''); 
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
 
 	//echo '<script type="text/javascript">alert("datos enviados a la base ok")</script>'
$fecha1=strftime("%d%m%Y");
$hora=strftime("%H :%M :%S");
$nombre = $f18inp1;
$nombre1 = $f18te2;

$contenido="
$hora 
$nombre1 
---------------------------------------------------------------------------";

    //$archivo=fopen("../../txt/$factura.txt", "w");
//if(error_log('no tiene datos disponibles'))
//mkdir("../txt/tipificacion/$fecha1", 0700 , true);
 //$carpeta = mkdir("../txt/tipificacion/$fecha1", 0700 , true);
error_reporting(0);

$carpeta="../txt/tipificacion/$fecha1/$nombre2";
 
 if($carpeta)
  {
  include("imprimir.php");
  }
  
  ?>
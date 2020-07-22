<?php

$hora= (isset($_POST['hora'])    ? $_POST['hora']    : '');


date_default_timezone_set ('America/Bogota') ;
 setlocale(LC_ALL,"es_ES");



$fecha1=strftime("%d%m%Y");
$fecha2=strftime("%H:%M:%S");

 session_start();
 $cedula = $_SESSION['usuario'];
 $ip = $_SERVER['REMOTE_ADDR'];
 $carpeta="../txt/adherencia/$cedula/ip/$fecha1";
 error_reporting(0);
 $ip1="::1";

foreach ($hora as $h) {	

$contenido="
$fecha1 /MARCACIÓN A LAS : $fecha2 /OBSERVACIÓN:$h 
---------------------------------------------------------------------------";

$ip = $_SERVER['REMOTE_ADDR'];
$carpeta="../txt/tipificacion/$ip/$fecha1";
error_reporting(0);
 $ip1="::1";


 if($carpeta)
  { 
 	if ($ip===$ip1){ 

    //$archivo=fopen("../../txt/$factura.txt", "w");
    $guardar=fopen("../txt/adherencia/$cedula/ip/$fecha1/$fecha1.txt", "a");

    fwrite ($guardar,$contenido);
    } 
    echo "<script type='text/javascript'>";
    echo "window.history.back(0)"; 
    //echo "<script window.parent.frames[0].location='http://www.yahoo.es'"; 
    echo "</script>";

    }
    
    else{

    	//$archivo=fopen("../../txt/$factura.txt", "w");
    $guardar=fopen("../txt/adherencia/$cedula/$ip/$fecha1/$fecha1.txt", "a");

    fwrite ($guardar,$contenido);
    } 
    echo "<script type='text/javascript'>";
    echo "window.history.back(0)"; 
    //echo "<script window.parent.frames[0].location='http://www.yahoo.es'"; 
    echo "</script>";
 }
		  
		
 	   	
  ?>
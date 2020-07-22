<?php 
session_start();
error_reporting(0);
header("Cache-Control", "no-cache, no-store, must-revalidate");
date_default_timezone_set ('America/Bogota') ;
       setlocale(LC_ALL,"es_ES");
       $fecha1=strftime("%d / %m / %Y");
       $hora=strftime("%H :%M :%S");

$actividad="desactivado"; 
$cedula = $_SESSION['usuario'];
 $ip = $_SERVER['REMOTE_ADDR'];  
     mkdir("../txt/usuarios/usuario1/$cedula", 0700 , true);
        $guardar=fopen("../txt/usuarios/usuario1/$cedula/actividad.txt", "w");
         fwrite ($guardar,$actividad);

          $conexion="desconexion del usuario: $cedula el dia $fecha1 a las $hora cerrado \n"; 
                mkdir("../txt/usuarios/usuario1/$cedula", 0700 , true); 
                $guardar31=fopen("../txt/usuarios/usuario1/$cedula/conexion.txt", "a");
                fwrite ($guardar31,$conexion); 

         echo '<script type="text/javascript">       
            alert("Gracias por Tu Dia que tengas Buen descanso");        
                  window.location.assign("../index.html");
                        </script>';

                       
  session_destroy(); 
  die();
  //session_write_close();
   //die();
 

 ?>
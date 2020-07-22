<?php
         // Abrir el archivo en modo de sólo lectura:

      date_default_timezone_set ('America/Bogota') ;
       setlocale(LC_ALL,"es_ES");
       error_reporting(0);

               //echo "IP Share: " . $_SERVER['HTTP_CLIENT_IP'] . "<br />";
                // IP Proxy
                //echo "IP Proxy: " . $_SERVER['HTTP_X_FORWARDED_FOR'] . "<br />";
                // IP Acceso
                //echo "IP Access: " . $_SERVER['REMOTE_ADDR'] . "<br />";

                //echo "mi ip".   $_SERVER['REMOTE_ADDR'];

            //$ip = $_SERVER['REMOTE_ADDR'];
            //echo $ip;
      session_start();
      $cedula = $_SESSION['usuario'];


      $ip = $_SERVER['REMOTE_ADDR'];
      $carpeta="../txt/adherencia/$cedula/ip/$fecha1";
      error_reporting(0);
       $ip1="::1";


if($carpeta)
  { 
  if ($ip===$ip1){ 
    
       $fecha1=strftime("%d%m%Y");
         mkdir("../txt/adherencia/$cedula/ip/$fecha1", 0700 , true);
       
                       //$cadena1 = fread($archivo, 18); // Leemos un determinado número de caracteres
               //rewind($archivo);   // Volvemos a situar el puntero al principio del archivo
            $archivo = fopen("../txt/adherencia/$cedula/ip/$fecha1/$fecha1.txt","rb");
             $cadena2 = fread($archivo, filesize("../txt/adherencia/$cedula/ip/$fecha1/$fecha1.txt"));  // Leemos hasta el final del archivo
              //if( ($cadena1 == false) || ($cadena2 == false) )
              
                      echo "///////////////////////////////////////LOGUEO HORA A HORA//////////////////////////////////////";
                      echo "
                      $cadena2";
         
                }else{

                   $fecha1=strftime("%d%m%Y");
                     mkdir("../txt/adherencia/$cedula/$ip/$fecha1", 0700 , true);
                   
                                   //$cadena1 = fread($archivo, 18); // Leemos un determinado número de caracteres
                           //rewind($archivo);   // Volvemos a situar el puntero al principio del archivo
                      $archivo = fopen("../txt/adherencia/$cedula/$ip/$fecha1/$fecha1.txt","rb");
                      $cadena2 = fread($archivo, filesize("../txt/adherencia/$cedula/$ip/$fecha1/$fecha1.txt"));  // Leemos hasta el final del archivo
                          //if( ($cadena1 == false) || ($cadena2 == false) )
                          
                      echo "///////////////////////////////////////LOGUEO HORA A HORA//////////////////////////////////////";
                      echo "$cadena2";



                }



          }

       
     

          // Cerrar el archivo:
          //      fclose($archivo);
      ?>
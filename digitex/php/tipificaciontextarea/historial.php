<?php
         
      session_start();
         
          $cedula = $_SESSION['usuario'];  
         

        date_default_timezone_set ('America/Bogota') ;
           setlocale(LC_ALL,"es_ES");



                      
              $nombre1 = ("MOVIMIENTO DE ORDEN");
              $nombre2 = ("AJUSTE DE TIEMPO");
              $nombre3 = ("SUSPENSIÓN");
              $nombre4 = ("ROUTING");
              $nombre5 = ("ASIGNACIÓN");
              $nombre6 = ("ACTIVIDAD EECC INTERNAS");
              $nombre7 = ("BUSQUEDA TRABAJO EFEC");
              $nombre8 = ("BUSQUEDA TRABAJO NEG");
              $nombre9 = ("VALIDACION DE DATOS");
              $nombre10 = ("QUIEBRE");
              $nombre11= ("ALMUERZO");
              $nombre12 = ("AGENDAR");
              $nombre13 = ("AUTORIZACIONES");
              $nombre14 = ("INCUMPLIMIENTO EECC");
              $nombre15 = ("CIERRE DE RUTA");
              $nombre16 = ("HABILITAR BOTON SUSPENDER");
              $nombre17 = ("ZONAS SPEEDY");
              $nombre18 = ("COMPLETADAS");






              $fecha1=strftime("%d%m%Y"); 
              error_reporting(0);                        
              $archivo1 = fopen("../../txt/tipificacion/$cedula/ip/$fecha1/$fecha1.$nombre1.guardar.txt","rb");
              $archivo2 = fopen("../../txt/tipificacion/$cedula/ip/$fecha1/$fecha1.$nombre2.guardar.txt","rb");
              $archivo3 = fopen("../../txt/tipificacion/$cedula/ip/$fecha1/$fecha1.$nombre3.guardar.txt","rb");
              $archivo4 = fopen("../../txt/tipificacion/$cedula/ip/$fecha1/$fecha1.$nombre4.guardar.txt","rb");
              $archivo5 = fopen("../../txt/tipificacion/$cedula/ip/$fecha1/$fecha1.$nombre5.guardar.txt","rb");
              $archivo6 = fopen("../../txt/tipificacion/$cedula/ip/$fecha1/$fecha1.$nombre6.guardar.txt","rb");
              $archivo7 = fopen("../../txt/tipificacion/$cedula/ip/$fecha1/$fecha1.$nombre7.guardar.txt","rb");
              $archivo8 = fopen("../../txt/tipificacion/$cedula/ip/$fecha1/$fecha1.$nombre8.guardar.txt","rb");
              $archivo9 = fopen("../../txt/tipificacion/$cedula/ip/$fecha1/$fecha1.$nombre9.guardar.txt","rb");
              $archivo10 = fopen("../../txt/tipificacion/$cedula/ip/$fecha1/$fecha1.$nombre10.guardar.txt","rb");
              $archivo11 = fopen("../../txt/tipificacion/$cedula/ip/$fecha1/$fecha1.$nombre11.guardar.txt","rb");
              $archivo112 = fopen("../../txt/tipificacion/$cedula/ip/$fecha1/$fecha1.$nombre12.guardar.txt","rb");
              $archivo13 = fopen("../../txt/tipificacion/$cedula/ip/$fecha1/$fecha1.$nombre13.guardar.txt","rb");
              $archivo14 = fopen("../../txt/tipificacion/$cedula/ip/$fecha1/$fecha1.$nombre14.guardar.txt","rb");
              $archivo15 = fopen("../../txt/tipificacion/$cedula/ip/$fecha1/$fecha1.$nombre15.guardar.txt","rb");
              $archivo16 = fopen("../../txt/tipificacion/$cedula/ip/$fecha1/$fecha1.$nombre16.guardar.txt","rb");
              $archivo17 = fopen("../../txt/tipificacion/$cedula/ip/$fecha1/$fecha1.$nombre17.guardar.txt","rb");
              $archivo18 = fopen("../../txt/tipificacion/$cedula/ip/$fecha1/$fecha1.$nombre18.guardar.txt","rb");
             





 //$cadena1 = fread($archivo, 18); // Leemos un determinado número de caracteres
                   //rewind($archivo);   // Volvemos a situar el puntero al principio del archivo
                   $cadena1 = fread($archivo1, filesize("../../txt/tipificacion/$cedula/ip/$fecha1/$fecha1.$nombre1.guardar.txt"));
                   $cadena2 = fread($archivo2, filesize("../../txt/tipificacion/$cedula/ip/$fecha1/$fecha1.$nombre2.guardar.txt")); 
                   $cadena3 = fread($archivo3, filesize("../../txt/tipificacion/$cedula/ip/$fecha1/$fecha1.$nombre3.guardar.txt"));
                   $cadena4 = fread($archivo4, filesize("../../txt/tipificacion/$cedula/ip/$fecha1/$fecha1.$nombre4.guardar.txt"));
                   $cadena5 = fread($archivo5, filesize("../../txt/tipificacion/$cedula/ip/$fecha1/$fecha1.$nombre5.guardar.txt"));
                   $cadena6 = fread($archivo6, filesize("../../txt/tipificacion/$cedula/ip/$fecha1/$fecha1.$nombre6.guardar.txt"));
                   $cadena7 = fread($archivo7, filesize("../../txt/tipificacion/$cedula/ip/$fecha1/$fecha1.$nombre7.guardar.txt"));
                   $cadena8 = fread($archivo8, filesize("../../txt/tipificacion/$cedula/ip/$fecha1/$fecha1.$nombre8.guardar.txt"));
                   $cadena9 = fread($archivo9, filesize("../../txt/tipificacion/$cedula/ip/$fecha1/$fecha1.$nombre9.guardar.txt"));
                   $cadena10 = fread($archivo10, filesize("../../txt/tipificacion/$cedula/ip/$fecha1/$fecha1.$nombre10.guardar.txt"));
                   $cadena11 = fread($archivo11, filesize("../../txt/tipificacion/$cedula/ip/$fecha1/$fecha1.$nombre11.guardar.txt"));
                   $cadena12 = fread($archivo12, filesize("../../txt/tipificacion/$cedula/ip/$fecha1/$fecha1.$nombre12.guardar.txt"));
                   $cadena13 = fread($archivo13, filesize("../../txt/tipificacion/$cedula/ip/$fecha1/$fecha1.$nombre13.guardar.txt"));
                   $cadena14 = fread($archivo14, filesize("../../txt/tipificacion/$cedula/ip/$fecha1/$fecha1.$nombre14.guardar.txt"));
                   $cadena15 = fread($archivo15, filesize("../../txt/tipificacion/$cedula/ip/$fecha1/$fecha1.$nombre15.guardar.txt"));
                   $cadena16 = fread($archivo16, filesize("../../txt/tipificacion/$cedula/ip/$fecha1/$fecha1.$nombre16.guardar.txt"));
                   $cadena17 = fread($archivo17, filesize("../../txt/tipificacion/$cedula/ip/$fecha1/$fecha1.$nombre17.guardar.txt"));
                   $cadena18 = fread($archivo18, filesize("../../txt/tipificacion/$cedula/ip/$fecha1/$fecha1.$nombre18.guardar.txt"));
                  
                     // Leemos hasta el final del archivo
                  //if( ($cadena1 == false) || ($cadena2 == false) )
                 
                    echo "/////////////////////////////////////////////////////////// $nombre1 //////////////////////////////////////////////////////////\n\n\n";
                    
                    echo "$cadena1\n\n\n";
                    
                    echo "/////////////////////////////////////////////////////////// $nombre2 //////////////////////////////////////////////////////////\n\n\n";
                    
                    echo "$cadena2\n\n\n"; 
                    echo "/////////////////////////////////////////////////////////// $nombre3 //////////////////////////////////////////////////////////\n\n\n";
                    
                    echo "$cadena3\n\n\n"; 
                    echo "/////////////////////////////////////////////////////////// $nombre4 //////////////////////////////////////////////////////////\n\n\n";
                    
                    echo "$cadena4\n\n\n"; 
                    echo "/////////////////////////////////////////////////////////// $nombre5 //////////////////////////////////////////////////////////\n\n\n";
                    
                    echo "$cadena5\n\n\n"; 
                    echo "/////////////////////////////////////////////////////////// $nombre6 //////////////////////////////////////////////////////////\n\n\n";
                    
                    echo "$cadena6\n\n\n"; 
                    echo "/////////////////////////////////////////////////////////// $nombre7 //////////////////////////////////////////////////////////\n\n\n";
                    
                    echo "$cadena7\n\n\n"; 
                    echo "/////////////////////////////////////////////////////////// $nombre8 //////////////////////////////////////////////////////////\n\n\n";
                    
                    echo "$cadena8\n\n\n"; 
                    echo "/////////////////////////////////////////////////////////// $nombre9 //////////////////////////////////////////////////////////\n\n\n";
                    
                    echo "$cadena9\n\n\n"; 
                    echo "/////////////////////////////////////////////////////////// $nombre10 //////////////////////////////////////////////////////////\n\n\n";
                     
                    echo "$cadena10\n\n\n"; 
                    echo "/////////////////////////////////////////////////////////// $nombre11 //////////////////////////////////////////////////////////\n\n\n";
                     
                    echo "$cadena11\n\n\n"; 
                    echo "/////////////////////////////////////////////////////////// $nombre12 //////////////////////////////////////////////////////////\n\n\n";
                     
                    echo "$cadena12\n\n\n"; 
                    echo "/////////////////////////////////////////////////////////// $nombre13 //////////////////////////////////////////////////////////\n\n\n";
                     
                    echo "$cadena13\n\n\n"; 
                    echo "/////////////////////////////////////////////////////////// $nombre14 //////////////////////////////////////////////////////////\n\n\n";
                     
                    echo "$cadena14\n\n\n"; 
                    echo "/////////////////////////////////////////////////////////// $nombre15 //////////////////////////////////////////////////////////\n\n\n";
                     
                    echo "$cadena15\n\n\n"; 
                    echo "/////////////////////////////////////////////////////////// $nombre16 //////////////////////////////////////////////////////////\n\n\n";
                     
                    echo "$cadena16\n\n\n"; 
                    echo "/////////////////////////////////////////////////////////// $nombre17 //////////////////////////////////////////////////////////\n\n\n";
                     
                    echo "$cadena17\n\n\n"; 
                    echo "/////////////////////////////////////////////////////////// $nombre18 //////////////////////////////////////////////////////////\n\n\n";
                     
                    echo "$cadena18\n\n\n";
                   

              // Cerrar el archivo:
              //      fclose($archivo);

       
         ?>
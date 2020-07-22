<?php 
error_reporting(0);
       $usuario= (isset($_POST['usuario'])    ? $_POST['usuario']    : '');
       $contrasena= (isset($_POST['contrasena'])    ? $_POST['contrasena']    : '');

       session_start();       
       $_SESSION["usuario"] = $usuario;
       $_SESSION["contrasena"] = $contrasena;
       	 //echo  $_SESSION["usuario"];
       
       //header("location:../../index/tipifica1.php")
       date_default_timezone_set ('America/Bogota') ;
       setlocale(LC_ALL,"es_ES");
       $fecha1=strftime("%d / %m / %Y");
       $hora=strftime("%H :%M :%S");
       $mostrarusuario= fopen("../../txt/usuarios/usuario1/$usuario/usuario.txt","rb");
       $cadena1 = fread($mostrarusuario, filesize("../../txt/usuarios/usuario1/$usuario/usuario.txt"));

       $mostrarcontrasena= fopen("../../txt/usuarios/usuario1/$usuario/contrasena.txt","rb");
       $cadena2 = fread($mostrarcontrasena, filesize("../../txt/usuarios/usuario1/$usuario/contrasena.txt"));


       $mostraractividad= fopen("../../txt/usuarios/usuario1/$usuario/actividad.txt","rb");
       $cadena3 = fread($mostraractividad, filesize("../../txt/usuarios/usuario1/$usuario/actividad.txt"));


       $mostrarconexion= fopen("../../txt/usuarios/usuario1/$usuario/conexion.txt","rb");
       $cadena4 = fread($mostrarconexion, filesize("../../txt/usuarios/usuario1/$usuario/conexion.txt"));
       //echo $cadena1;
       if($usuario===$cadena1)
       { 
       //echo "existe";       	
       //echo  $_SESSION["usuario"];
	   
       //echo $cadena1;
        
        //echo "existe"; 
       //echo $cadena1;
        //echo $cadena2;
       
        if($contrasena===$cadena2){


               
                $archivo = fopen("../../txt/usuarios/usuario1/$cedula/actividad.txt","rb");
                $cadena3 = fread($archivo, filesize("../../txt/usuarios/usuario1/$cedula/actividad.txt"));


                if($cadena3 =="activo") {
                  echo '<script type="text/javascript">       
                            alert("Acceso no autorizado el usuario se encuentra activo");        
                                  window.location.assign("../../index.html");
                                        </script>';
                                        die();}
                                        


          $actividad="activo";   
          mkdir("../../txt/usuarios/usuario1/$usuario", 0700 , true);
            $guardar=fopen("../../txt/usuarios/usuario1/$usuario/actividad.txt", "w");
              fwrite ($guardar,$actividad);

           $conexion="\nconexion del usuario: $usuario con la contraseña :$contrasena el dia $fecha1 a las $hora OK \n"; 
                mkdir("../../txt/usuarios/usuario1/$usuario", 0700 , true); 
                $guardar31=fopen("../../txt/usuarios/usuario1/$usuario/conexion.txt", "a");
                fwrite ($guardar31,$conexion);
                    
                

               echo '<script type="text/javascript">       
                   alert("Probando vamos a proceder a redireccionar");        
                       window.location.assign("../../index/tipifica1.php");

                         </script>';
                       

        }else{
         echo '<script type="text/javascript">
       
            alert("contraseña equivocada porfavor valide la información");        
                  window.location.assign("../../index.html");
                        </script>';

        }

        
       }

       else
       {
       
      //echo "no existe"; 
       //echo $cadena1;
        //echo $cadena2;

        $registro="el usuario :$usuario creado el dia: $fecha1 a las: $hora \n";   
          mkdir("../../txt/usuarios/usuario1/$usuario", 0700 , true);
            $guardar=fopen("../../txt/usuarios/usuario1/$usuario/registro.usuario.txt", "a");
              fwrite ($guardar,$registro);
              $registro1="la contrasena:$contrasena creado el dia: $fecha1 a las: $hora";              
                fwrite ($guardar,$registro1);

     


      $contenido="$usuario";   
       mkdir("../../txt/usuarios/usuario1/$usuario", 0700 , true);
          $guardar2=fopen("../../txt/usuarios/usuario1/$usuario/usuario.txt", "a");
      fwrite ($guardar2,$contenido);

      $contenido1="$contrasena"; 
      mkdir("../../txt/usuarios/usuario1/$usuario", 0700 , true); 
      $guardar21=fopen("../../txt/usuarios/usuario1/$usuario/contrasena.txt", "a");
      fwrite ($guardar21,$contenido1);

      $contenido2="conexion del usuario: $usuario con la contaseña :$contrasena el dia $fecha1 a las $hora OK"; 
      mkdir("../../txt/usuarios/usuario1/$usuario", 0700 , true); 
      $guardar31=fopen("../../txt/usuarios/usuario1/$usuario/conexion.txt", "a");
      fwrite ($guardar31,$contenido2);

        echo '<script type="text/javascript">
       
       alert("se a creado el usuario correctamente porfavor ingrese");        
         window.location.assign("../../index.html");

        </script>';
     
       //header("Location: ../../index.html",TRUE,301); 
             
        //header("location:index.html");
       }
       
       
  ?>
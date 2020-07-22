 <?php 
$ip = $_SERVER['REMOTE_ADDR'];
$carpeta="../txt/tipificacion/$ip/$fecha1";
error_reporting(0);
 $ip1="::1";


 if($carpeta)
  { 
 	if ($ip===$ip1){ 

 	session_start();
	
	$cedula = $_SESSION['usuario'];
 	   mkdir("../../txt/tipificacion/$cedula/ip/$fecha1", 0700 , true);
		 $guardar=fopen("../../txt/tipificacion/$cedula/ip/$fecha1/$fecha1.$nombre.guardar.txt", "a");
		  fwrite ($guardar,$contenido);

		  //mkdir("../txt/tipificacion/$cedula/ip/$fecha1", 0700 , true);s
		echo "<script type='text/javascript'>";
		echo "window.history.back(-1)"; 
		    // echo "<script>alert('aaa');</script>";
		    echo "</script>";
		    //echo header("location:eaab.php");				
 	}
    
    else{
    	session_start();
    	
    	$cedula = $_SESSION['usuario'];
	mkdir("../../txt/tipificacion/$cedula/$ip/$fecha1", 0700 , true);
		 $guardar=fopen("../../txt/tipificacion/$cedula/$ip/$fecha1/$fecha1.$nombre.guardar.txt", "a");
		  fwrite ($guardar,$contenido);

		  $guardar1=fopen("../../txt/tipificacion/$cedula/$ip/$fecha1/$fecha1.$nombre.BASE.txt", "a");
		  fwrite ($guardar1,$contenido1);
		 echo "<script type='text/javascript'>";
		echo "window.history.back(-1)"; 
		     //echo "<script>alert('aaa');</script>";
		    echo "</script>";
		    //echo header("location:eaab.php");
          }
		  
		
 	   	
   }
    ?>
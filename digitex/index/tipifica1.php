<?php 
session_start();
error_reporting(0);



if($_SESSION['usuario'] == null || $_SESSION['usuario'] == '') {
  echo '<script type="text/javascript">       
            alert("Acceso no autorizado esta valiolando los parametros de seguridad de la pagina");        
                  window.location.assign("../index.html");
                        </script>';
  die();
  }

$cedula=$_SESSION['usuario'];


 ?>

<!DOCTYPE html>
<html>
<title>TIPIFICACIÓN</title>
<head>
 <meta charset="utf-8">	
 <link REL="StyleSheet" HREF="../css/tipifica1.css?v" TYPE="text/css">
 <script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
 <script src="../js/tipifica1.js"></script> 
 <script src="../js/tipifica2.js"></script>
 <script src="../js/funciones.js"></script> 
 <script src="../js/css.js"></script>
 
 
<!-- <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
<META HTTP-EQUIV="Refresh" CONTENT="0;url=tipifica.html'">-->

</head>
<body id="body" style="background-color: #BDDFFF;background-size: 100%;background-repeat: no-repeat;" background="../img/inicio/407909.jpg">

<form name="form1"> 
<div style="width: 100%; height:15px; float: right; font-size: x-small;">
<h1 id="aa1" name="aa1" style="float:left; width: 30%; height:20px; background-color: white;border-radius:60px;font-family:Brush Script MT;font-size:15px;" value="">Mi Usuario : <?php echo $cedula?></h1>

<button id="aa2" name="aa2" style="float:right; width: 18%; height:18px; background-color: silver;border-radius:60px;font-family:Brush Script MT;font-size:15px; padding: 0px 0px 0px 0px;" value="" onclick=this.form.action="../../digitex/index/cerrar.php">Cerrar sesion: <?php echo $cedula?></button> 
</div>
<br><br><br>
</form>


<div class="nav">


  <form method="post"> 
      <ul>
      	     <li id="b1" name="b1" class="color"><a href="#1">M.DE ORDEN</a></li>  	
      	     <li id="b2" name="b2" class="color"><a href="#2">AJU DE TIEMPO</a></li>
             <li id="b3" name="b3" class="color"><a href="#3">SUSPENSIÓN</a></li>
             <li id="b4" name="b4" class="color"><a href="#4">ROUTING</a></li>
             <!--<li id="b4" name="b4" class="color"><a href="#4" onclick="amarillo1()">ROUTING</a></li>-->
             <li id="b5" name="b5" class="color"><a href="#5">ASIGNACION</a></li>
             <li id="b6" name="b6" class="color"><a href="#6">ACT INT EECC</a></li>
             
         
      </ul>
      
      

      <ul>
               
              <li id="b7" name="b7" class="color"><a href="#7">B.TRABAJO EFEC</a></li>
              <li id="b8"  name="b8" class="color"><a href="#8">B.TRABAJO NEG</a></li>
              <li id="b9"  name="b9" class="color"><a href="#9">V.DE DATOS</a></li>
               <li id="b10" name="b10" class="color"><a href="#10">QUIEBRE</a></li>
               <li id="b11" name="b11" class="color"><a href="#11">ALMUERZO</a></li>
               <li id="b12" name="b12" class="color"><a href="#12">AGENDAR</a></li>
               
      </ul>


      <ul>          
               
              <li id="b13" name="b13" class="color"><a href="#13">AUTORIZACIONES</a></li>
               <li id="b14" name="b14" class="color"><a href="#14">INC EECC</a></li>
               <li id="b15" name="b15" class="color"><a href="#15">C DE RUTA</a></li>
               <li id="b16" name="b16" class="color"><a href="#16">BOTON SUSP</a></li>
               <li id="b17" name="b17" class="color"><a href="#17">ZONAS SPEEDY</a></li>
               <li id="b18" name="b18" class="color"><a href="#18">COMPLETADAS</a></li>
      </ul>

      <ul id="centrar">
                        
               <li></li>               
               <li id="b19" name="b19" class="color"><a href="#19">ADHERENCIA</a></li>
               <li id="b20" name="b20" class="plata"><a href="#20">HISTORIAL</a></li>
               <li id="b21" name="b21" class="amarillo"><a href="#21">HORA A HORA</a></li>
               <li id="b22" name="b22" class="color"><a href="#22">BASE</a></li>       
               <li></li>
               
      </ul>
    </form>

  </div>

      
    <br>
    <form id="hora1" name="hora1" method="post">    
      <h1 style="float:left; color: white;">Hora Ultima Actualización:</h1><span id="hora3" name="hora3" type="text" style="width:30%;height:20%;color:white;font-size: large;" media="screen" value="<?php include("../php/horario/horario.php");?>"><?php include("../php/horario/horario.php");?></span>
      
    </form>


    <hr>

  <div class="fila">
    <form method="post">    
    	<span class="amarillo">
            <input type="checkbox" name="hora[]" value="entrada 6AM ó 1PM" id="hora1">ENT</span>
    	<span class="colorletra"><input type="checkbox" name="hora[]" value="hora a hora 7AM ó 2PM" id="hora2">7 ó 2</span>
    	<span class="colorletra1"><input type="checkbox" name="hora[]" value="hora a hora 8AM ó 3PM" id="hora3">8 ó 3</span>
    	<span class="colorletra"><input type="checkbox" name="hora[]" value="hora a hora 9AM ó 4PM" id="hora4">9 ó 4</span>
    	<span class="colorletra1"><input type="checkbox" name="hora[]" value="hora a hora 10AM ó 5PM" id="hora5">10 ó 5</span>
    	<span class="colorletra"><input type="checkbox" name="hora[]" value="hora a hora 11AM ó 6PM" id="hora6">11 ó 6</span>
    	<span class="colorletra1"><input type="checkbox" name="hora[]" value="hora a hora 12AM ó 7PM" id="hora7">12 ó 7</span>
    	<span class="colorletra"><input type="checkbox" name="hora[]" value="hora a hora salida a break" id="hora8">salB</span>
    	<span class="colorletra1"><input type="checkbox" name="hora[]" value="hora a hora entrada de break" id="hora9">entB</span>
      <span class="colorletra"><input type="checkbox" name="hora[]" value="hora a hora 1AM ó 8PM" id="hora10"  >1 ó 8</span>
      <span class="amarillo">
            <input type="checkbox" name="hora[]" value="salida hora a hora 2 ó 9PM" id="hora10"  >SAL</span>
        <button class="boton"  onclick=this.form.action="../php/validacioncheck.php" value="enviar" id="hora9">enviar</button>
    </form>
  </div>






    <br> 


     <div class="nav1" id="div1">
      <form id="f0" method="post">
      <iframe name="f0te1" id="f0te1" src="https://docs.google.com/forms/d/e/1FAIpQLSe5dhJn-FLYqv-Mb4NPmPmoHyXsO9fh1u3nRGM5CecACwaVmw/viewform" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" style="width:100%;height:250px";></iframe>
      <p><b>TIPIFICADOR</b></p></div>
      </form>



      <!-- <div class="nav1" id="frame2">
      <iframe id="frame3" name="frame3" src="" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" style="width:100%;height:244px";></iframe>
      <p><b>TIPIFICADOR</b></p></div>-->
    
           

<div class="nav2">

     
    <form id="f1" method="post">

<!-- -->
      <input type="hidden" class="inp" placeholder="fecha" id="fecha1" name="fecha1" value="<?php include("../php/horario/fecha.php");?>">
      <input type="hidden" class="inp" placeholder="tiempo" id="tiempo1" name="tiempo1" value="<?php include("../php/horario/horario.php");?>">
      <input type="hidden" class="inp" placeholder="cedula" id="cedula1" name="cedula1" value="<?php echo $cedula?>">
      <input  class="inp" placeholder="Orden" id="orden1" name="orden1"> 
      <input  class="inp1" placeholder="Técnico" id="tecnico1" name="tecnico1">
      <input  class="inp" placeholder="Posicion" id="posicion1" name="posicion1">          
      <input list="eecc" class="inp1" placeholder="EECC1" id="EECC1" name="EECC1">

      <datalist id="eecc">   
        <option value="Jimena Paz"></option>
        <option value="Betsy Garcia"></option>
        <option value="Sandy Serrano"></option>
        <option value="David Botina"></option>
        <option value="Milena Palacios"></option>
        <option value="Katherine Vera"></option>
        <option value="Gisela marulanda"></option>
      </datalist>
      <hr>
      <input  list="observaciones" class="inp1" placeholder="Observacion" id="observacion1" name="observacion1" style="width:85%">  

      <datalist id="observaciones">         
        <option value="de apoyo sin zonas"></option>
        <option value="de apoyo sin zonas se cargan zonas en toa pendiente EECC speedy"></option>
        <option value="sin habilidades EECC indica cargar habilidades"></option>
        <option value="se retira tecnico requerido"></option>
        <option value="se levanta suspensión, se agenda hoy"></option>
        <option value="material involucrado"></option>
        <option value="de apoyo sin zonas ,sin habilidades EECC indica cargar habilidades">habilidades y zonas</option>
        <option value="se retira tecnico requerido , se levanta suspensión se agenda hoy ,material involucrado">requerido, material ,levanta</option> 
        <option value="de apoyo sin zonas se cargan zonas en toa pendiente EECC speedy,sin habilidades EECC indica cargar habilidades,se retira tecnico requerido , se levanta suspensión se agenda hoy ,material involucrado">si son varias opciones</option>          
     </datalist>

      <div onclick="copiarDatos1()" class="div">        
      copiar</div> 
  <!-- --> 

      <input class="amarillo" name="f1inp1" id="f1inp1" value="MOVIMIENTO DE ORDEN" readonly="readonly" style="width:100%">	
      <textarea name="f1te2" id="f1te2" class="fondo1" readonly="readonly"></textarea>
      <button onclick=this.form.action="../php/tipificaciontextarea/tipifica1.php" id="f1but1">enviar</button>
      <p class="amarillo" id="f1p1"><b onclick="ayudamov()">AYUDA</b></p>  
      <!--<textarea  name="f1te1" id="f1te1" class="fondo2">
        m1 = Or __ Tec __ eecc __  mover a xx posición,
        m4 = de apoyo sin zonas Cargadas  
        m5 = ,de apoyo sin habilidades Cargadas, eecc pendiente asignación habilidades 
        m6 = ,se retira tecnico requerido
        m7 = , material involucrado 
        m8 = ,se levanta suspensión se agenda hoy 
      </textarea>-->       
      <textarea name="f1te1" id="f1te1" class="fondo2">
      concejos para ayuda
      </textarea>
      </form>
       

      
      <form id="f2" method="post">
       <!-- -->
      <input type="hidden" class="inp" placeholder="fecha" id="fecha2" name="fecha2" value="<?php include("../php/horario/fecha.php");?>">
      <input type="hidden" class="inp" placeholder="tiempo" id="tiempo2" name="tiempo2" value="<?php include("../php/horario/horario.php");?>">
      <input type="hidden" class="inp" placeholder="cedula" id="cedula2" name="cedula2" value="<?php echo $cedula?>">
      <input  class="inp" placeholder="Orden" id="orden2" name="orden2"> 
      <input  class="inp1" placeholder="Técnico" id="tecnico2" name="tecnico2">
       <input list="eecc" class="inp1" placeholder="EECC2" id="EECC2" name="EECC2">
      <!-- <input  class="inp" placeholder="Posicion" id="posicion" name="posicion">-->
      <hr>
      <input list="observaciones2" class="inp1" placeholder="Observacion" id="observacion2" name="observacion2"  style="width:85%">
      <datalist id="observaciones2">         
        <!-- <option value="técnicos inician labores a las 8 00 AM en esta zona  pendiente validación de inicio de orden"></option>
        <option value="Retraso de inicio de orden,pendiente ajuste de tiempo por parte de contratista"></option>
        <option value="Retraso de inicio de orden, es necesario ajuste de tiempo , motivo desplazamiento de el técnico al sitio"></option>
        <option value="Retraso de inicio de orden, para ajuste de tiempo , se informa a eecc xxx indica que lo llama para que inicie la orden"></option>-->
        <option value=""></option>
        <option value="Retraso en el cierre de la orden ,pendiente  para ajuste de tiempo por parte de la contratista">parte contratista</option>
        <option value="Retraso en el cierre de la orden, informe para ajuste de tiempo, motivo del técnico instalación y configuración de equipos">instalacion equipos</option> 
        <option value="Retraso en el cierre de la orden,informe para ajuste de tiempo, motivo del técnico configuración en pruebas en terreno">pruebas terrreno</option>
        <option value="Retraso en el cierre de la orden, informe para ajuste de tiempo, se valida técnico sin gestión">sin gestion</option>          
     </datalist>
     
     

      <datalist id="eecc">   
        <option value="Jimena Paz"></option>
        <option value="Betsy Garcia"></option>
        <option value="Sandy Serrano"></option>
        <option value="David Botina"></option>
        <option value="Milena Palacios"></option>
        <option value="Katherine Vera"></option>
        <option value="Gisela marulanda"></option>
      </datalist>
      
       <div onclick="copiarDatos2()" class="div">        
      copiar</div> 
  <!-- --> 
      
      <input class="verde" name="f2inp1" id="f2inp1" value="AJUSTE DE TIEMPO"  readonly="readonly" style="width:100%">
      <textarea name="f2te2" id="f2te2" class="fondo1"></textarea>
      <button onclick=this.form.action="../php/tipificaciontextarea/tipifica2.php" id="f2but2">enviar</button>
     <p class="verde" id="f2p1"><b>AYUDA</b></p> 
      <textarea name="f2te1" id="f2te1" class="fondo2">
      Inicio  
      r0 = técnicos inician labores a las 8 00 AM en esta zona  pendiente validación de inicio de orden
      r1 = Retraso de inicio de orden,pendiente ajuste de tiempo por parte de contratista 
      r2 = Retraso de inicio de orden, es necesario ajuste de tiempo , motivo desplazamiento de el técnico al sitio
      r3 = Retraso de inicio de orden, para ajuste de tiempo , se informa a eecc xxx indica que lo llama para que inicie la orden 
          
      Cierre
      rc1 = Retraso en el cierre de la orden ,pendiente  para ajuste de tiempo por parte de la contratista.
      rc2 = Retraso en el cierre de la orden, informe para ajuste de tiempo, motivo del técnico instalación y configuración de equipos 
      rc3 = Retraso en el cierre de la orden,informe para ajuste de tiempo, motivo del técnico configuración en pruebas en terreno
      rc4 = Retraso en el cierre de la orden, informe para ajuste de tiempo, se valida técnico sin gestión 
      rc5 = técnico con retraso, validación de ajuste correcta 

      ¶ Consejos ¶ ajuste "verde"

      se realiza Cuando el técnico va sobrepasado de tiempo en una orden iniciada 

      </textarea>

      <hr></form>





      <form id="f3" method="post">

        <!-- -->
      <input type="hidden" class="inp" placeholder="fecha" id="fecha3" name="fecha3" value="<?php include("../php/horario/fecha.php");?>">
      <input type="hidden" class="inp" placeholder="tiempo" id="tiempo3" name="tiempo3" value="<?php include("../php/horario/horario.php");?>">
      <input type="hidden" class="inp" placeholder="cedula" id="cedula3" name="cedula3" value="<?php echo $cedula?>">
      <input  class="inp" placeholder="Orden" id="orden3" name="orden3"> 
      <input  class="inp1" placeholder="Técnico" id="tecnico3" name="tecnico3">
      <!-- <input  class="inp" placeholder="Posicion" id="posicion" name="posicion">-->

      <input list="motivo" class="inp1" placeholder="Motivo" id="motivo3" name="motivo3">
      <datalist id="motivo">   
        <option value="incumplimiento de cita por parte del cliente"></option>
        <option value="Cliente solicita reagendar"></option>
        <option value="Cliente ausente"></option>
        <option value="Solicitud cliente"></option>  
        <option value="Trabajo en ejecucion"></option>
        <option value="Requiere precalificacion"></option>
        <option value="Respuesta asistec"></option>
        <option value="Falla Aplicativos"></option>
        <option value="Falta de materiales"></option>
        <option value="Pendiente vias"></option>
        <option value="Lluvias"></option>
        <option value="Intermitencia"></option>
        <option value="Daño masivo"></option>
      </datalist>
      <hr>
      
      <input  list="datadatos" class="inp1" placeholder="Datos" id="datos3" name="datos3" style="width: 85%;">
      <datalist id="datadatos">         
        <!-- <option value="técnicos inician labores a las 8 00 AM en esta zona  pendiente validación de inicio de orden"></option>
        <option value="Retraso de inicio de orden,pendiente ajus528078185te de tiempo por parte de contratista"></option>
        <option value="Retraso de inicio de orden, es necesario ajuste de tiempo , motivo desplazamiento de el técnico al sitio"></option>
        <option value="Retraso de inicio de orden, para ajuste de tiempo , se informa a eecc xxx indica que lo llama para que inicie la orden"></option>-->
        <option value=""></option>
        <option value="TK # _______ ,estado ________"><input type="text"></option>         
        <option value="Nos comunicamos a la linea __________ , ingresa a buzon de voz">Observaciones</option>
        <option value="Nos comunicamos a la linea __________ , con el usuario ________">Observaciones</option>  
        
     </datalist>
     <hr>
     <input  class="inp1" placeholder="Observacion" id="observacion3" name="observacion3" style="width: 85%;"> 
       <div onclick="copiarDatos3()" class="div">        
      copiar</div> 
  <!-- --> 
      
      <input class="morado" name="f3inp1" id="f3inp1" value="SUSPENSIÓN" readonly="readonly" style="width:100%">
      <textarea name="f3te2" id="f3te2" class="fondo1">
      </textarea>
      <button onclick=this.form.action="../php/tipificaciontextarea/tipifica3.php">enviar</button>
      <button><a href="../html/Mdesuspension.html" target="_Blank">Motivos</a></button>
      <p class="morado" id="f3p1"><b>AYUDA</b></p>  
      <textarea name="f3te1" id="f3te1" class="fondo2">
      s1 = orden xxxxx tec xxxxx ,se valida motivo de suspensión ___ tk ___ observación ____
      s2 = orden xxxxx tec xxxxx ,se valida motivo de suspensión ________ nos intentamos comunicar con la linea ________ 

      ¶ Consejos Suspensión  "morado"

      </textarea>
      <hr></form>





      <form id="f4" method="post">
      <input class="amarillo" name="f4inp1" id="f4inp1" value="ROUTING" readonly="readonly" style="width:100%"> 
      <textarea name="f4te2" id="f4te2" class="fondo1">
      </textarea>
      <button onclick=this.form.action="../php/tipificaciontextarea/tipifica4.php" >enviar</button>
      <p class="amarillo" id="f4p1"><b>AYUDA</b></p> 
      <textarea name="f4te1" id="f4te1" class="fondo2">espacio para ayudas</textarea>
      
      <hr></form>





      <form id="f5" method="post">
      <input class="amarillo" name="f5inp1" id="f5inp1" value="ASIGNACIÓN" readonly="readonly" style="width:100%">
      <textarea name="f5te2" id="f5te2" class="fondo1">
      </textarea>
      <button onclick=this.form.action="../php/tipificaciontextarea/tipifica5.php">enviar</button>
       <p class="amarillo" id="f5p1"><b>AYUDA</b></p> 
      <textarea name="f5te1" id="f5te1" class="fondo2">espacio para ayudas</textarea>
      
      <hr></form>





      <form id="f6" method="post">
      <input class="plata" name="f6inp1" id="f6inp1" value="ACTIVIDAD EECC INTERNAS" readonly="readonly" style="width:100%">
      <textarea name="f6te2" id="f6te2" class="fondo1">
      </textarea>
      <button onclick=this.form.action="../php/tipificaciontextarea/tipifica6.php" >enviar</button>
      <p class="plata" id="f6p1"><b>AYUDA</b></p> 
      <textarea name="f6te1" id="f6te1" class="fondo2">espacio para ayudas</textarea>  
      
      
      <hr></form>





      <form id="f7" method="post">
      <input class="amarillo" name="f7inp1" id="f7inp1" value="BUSQUEDA TRABAJO EFEC" readonly="readonly" style="width:100%">
      <textarea name="f7te2" id="f7te2" class="fondo1">
      </textarea>
      <button onclick=this.form.action="../php/tipificaciontextarea/tipifica7.php">enviar</button>
       <p class="amarillo" id="f7p1"><b>AYUDA</b></p> 
      <textarea name="f7te1" id="f7te1" class="fondo2">espacio para ayudas</textarea>
      <hr></form>





      <form id="f8" method="post">
      <input class="amarillo" name="f8inp1" id="f8inp1" value="BUSQUEDA TRABAJO NEG" readonly="readonly" style="width:100%">
      <textarea name="f8te2" id="f8te2" class="fondo1">
      </textarea>      
      <button onclick=this.form.action="../php/tipificaciontextarea/tipifica8.php">enviar</button>
      <p class="amarillo" id="f8p1"><b>AYUDA</b></p>  
      <textarea name="f8te1" id="f8te1" class="fondo2">espacio para ayudas</textarea>
      <hr></form>





      <form id="f9" method="post">
      <input class="amarillo" name="f9inp1" id="f9inp1" value="VALIDACION DE DATOS" readonly="readonly" style="width:100%">
      <textarea name="f9te2" id="f9te2" class="fondo1">
      </textarea>
      <button onclick=this.form.action="../php/tipificaciontextarea/tipifica9.php" >enviar</button>
       <p class="amarillo" id="f9p1"><b>AYUDA</b></p> 
      <textarea name="f9te1" id="f9te1" class="fondo2">espacio para ayudas</textarea> 
      </textarea>      
      <hr></form>





      <form id="f10" method="post">
     
      <input class="naranja" name="f10inp1" id="f10inp1"  value="QUIEBRE" readonly="readonly" style="width:100%">
      <textarea name="f10te2" id="f10te2" class="fondo1">
      </textarea>
      <button onclick=this.form.action="../php/tipificaciontextarea/tipifica10.php">enviar</button>
      <p class="naranja" id="f10p1"><b>AYUDA</b></p> 
      <textarea name="f10te1" id="f10te1" class="fondo2">q1 = orden xxxxx tec xxxxx ,se valida motivo</textarea> 
      <hr></form>





      <form id="f11" method="post">
      
      <input class="amarillo" name="f11inp1" id="f11inp1"  value="ALMUERZO" readonly="readonly" style="width:100%">
      <textarea name="f11te2" id="f11te2" class="fondo1">
      </textarea>
      <button onclick=this.form.action="../php/tipificaciontextarea/tipifica11.php" >enviar</button>
      <p class="amarillo" id="f11p1"><b>AYUDA</b></p> 
      <textarea name="f11te1" id="f11te1" class="fondo2">espacio para ayudas</textarea>  
      <hr></form>





      <form id="f12" method="post">
      
      <input class="amarillo" name="f12inp1" id="f12inp1"  value="AGENDAR" readonly="readonly" style="width:100%">
      <textarea name="f12te2" id="f12te2" class="fondo1">
      </textarea>
      <button onclick=this.form.action="../php/tipificaciontextarea/tipifica12.php" >enviar</button>
      <p class="amarillo" id="f12p1"><b>AYUDA</b></p> 
      <textarea name="f12te1" id="f12te1" class="fondo2">espacio para ayudas</textarea>
      <hr></form>





      <form id="f13" method="post">
      
      <input class="amarillo" name="f13inp1" id="f13inp1"  value="AUTORIZACIONES" readonly="readonly" style="width:100%">
      <textarea name="f13te2" id="f13te2" class="fondo1">
      </textarea>
      <button onclick=this.form.action="../php/tipificaciontextarea/tipifica13.php" >enviar</button>
      <p class="amarillo" id="f13p1"><b>AYUDA</b></p> 
      <textarea name="f13te1" id="f13te1" class="fondo2">espacio para ayudas</textarea>
      <hr></form>





      <form id="f14" method="post">
     
      <input class="amarillo" name="f14inp1" id="f14inp1"  value="INCUMPLIMIENTO EECC" readonly="readonly" style="width:100%">
      <textarea name="f14te2" id="f14te2" class="fondo1">
      </textarea>
      <button onclick=this.form.action="../php/tipificaciontextarea/tipifica14.php" >enviar</button>
       <p class="amarillo" id="f14p1"><b>AYUDA</b></p>  
      <textarea name="f14te1" id="f14te1" class="fondo2">espacio para ayudas</textarea>
      <hr></form>





      <form id="f15" method="post">
      
      <input class="rojo" name="f15inp1" id="f15inp1"  value="CIERRE DE RUTA" readonly="readonly" style="width:100%">
      <textarea name="f15te2" id="f15te2" class="fondo1">
      </textarea>
      <button onclick=this.form.action="../php/tipificaciontextarea/tipifica15.php">enviar</button>
      <p class="rojo" id="f15p1"><b>AYUDA</b></p> 
      <textarea name="f15te1" id="f15te1" class="fondo2">espacio para ayudas</textarea>
      <hr></form>





      <form id="f16" method="post">
      
      <input class="verde" name="f16inp1" id="f16inp1"  value="HABILITAR BOTON SUSPENDER" readonly="readonly" style="width:100%">
      <textarea name="f16te2" id="f16te2" class="fondo1">
      </textarea>
      <button onclick=this.form.action="../php/tipificaciontextarea/tipifica16.php">enviar</button>
      <p class="verde" id="f16p1"><b>AYUDA</b></p>  
      <textarea name="f16te1" id="f16te1" class="fondo2">espacio para ayudas</textarea>
      <hr></form>





      <form id="f17" method="post">
      
      <input class="amarillo" name="f17inp1" id="f17inp1"  value="ZONAS SPEEDY" readonly="readonly" style="width:100%">
      <textarea name="f17te2" id="f17te2" class="fondo1">
      </textarea>
      <button onclick=this.form.action="../php/tipificaciontextarea/tipifica17.php">enviar</button>
      <p class="amarillo" id="f17p1"><b>AYUDA</b></p> 
      <textarea name="f17te1" id="f17te1" class="fondo2">espacio para ayudas
      </textarea>
      <hr></form>





      <form id="f18" method="post">
      
      <input class="azul" name="f18inp1" id="f18inp1"  value="COMPLETADAS" readonly="readonly" style="width:100%">
      <textarea name="f18te2" id="f18te2" class="fondo1">
      </textarea>
      <button onclick=this.form.action="../php/tipificaciontextarea/tipifica18.php">enviar</button>
      <p class="azul" id="f18p1"><b>AYUDA</b></p> 
      <textarea name="f18te1" id="f18te1" class="fondo2">c1 = Or __ Tec __ observación completada de acuerdo al lineamiento 
      </textarea>
      <hr></form>



        
      <form id="f19" method="post">      
      <p><b>ADHERENCIA </b></p>
      <iframe name="f19te1" id="f19te1" src="https://docs.google.com/forms/d/e/1FAIpQLSf3ZhoP7z52-wQ1UbEzwhExXYkqhB5llWDMYgzYTwxioIQZow/viewform?fbzx=7672049041104989523" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" style="width:100%;height:1250px;float:center;zoom:20%;";></iframe>
      </form>
      
      


     <form id="f20" method="post">
      <p class="plata"><b>HISTORIAL</b></p> 
      <textarea name="f20te1" id="f20te1" style="margin: 0px; width: 100%; height: 245px;">
      <?php
      include("../php/historial.php");
      ?></textarea>
      <hr></form>



     



      <form id="f21" method="post"><p class="amarillo"><b>HORA A HORA</b></p>
      <textarea name="f21te1" id="f21te1" class="fondo1" style="margin: 0px; width: 99%; height: 248px;" value="">
      <?php
      include ("../php/hora.php");
      ?> 
          

      </textarea>
      <!--<button>actualiza</button>-->
      <hr></form>

      


      <form id="f22" method="post">
      
      <input class="azul" name="f22inp1" id="f22inp1"  value="BASE" readonly="readonly" style="width:100%" >
      <textarea name="f22te1" id="f22te1" class="fondo1"></textarea>
      
      <button onclick=this.form.action="../php/tipificaciontextarea/tipifica22.php">enviar</button>
      <hr></form>

</div>





 
</body>
</html>

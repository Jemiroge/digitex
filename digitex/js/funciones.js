
function ayudamov() {
 
 alert('\n ¶ Consejos ¶ Movimiento "amarillo"   \n se realizan si son ordenes no envejecidas ,'+
 ' \n si no tienen zonas cargar zonas ,'+ '\n sin habilidades las carga el EECC si no las carga no se puede'+  
 '\n realizar el movimiento realizar movimientos de almuerzos según indiquen ');

}

//var f22te1 = document.getElementById("f22te1").value;
function copiarDatos1(){
   var fecha1 = document.getElementById("fecha1").value;
   var tiempo1 = document.getElementById("tiempo1").value;
   var cedula1 = document.getElementById("cedula1").value;
  var orden1 = document.getElementById("orden1").value;
  var tecnico1 = document.getElementById("tecnico1").value;
  var posicion1 = document.getElementById("posicion1").value;
  var EECC1 = document.getElementById("EECC1").value;
  var observacion1 = document.getElementById("observacion1").value;
  var f1te2 = document.getElementById("f1te2").value;
  var f22te1 = document.getElementById("f22te1").value;

  if(orden1 == "" || tecnico1=="" || EECC1==""){

     alert ("no es posible continuar campos orden ,tecnico y EECC son necesarios");
     } 

     else{
      

      if(observacion1 == ""){
           
          var texto = "se genera el movimiento del numero de orden " + orden1 +" al técnico " + tecnico1 + " en la posición "
           + posicion1  +  " reporta el gestor "+ EECC1 + "\n";
            //alert(texto);	
          document.getElementById("f1te2").innerHTML= f1te2 + texto;

           }else{ 

           var texto = "se genera el movimiento del numero de orden " + orden1 +" al técnico " +tecnico1 + " en la posición " 
           +posicion1  + " observacion "+ observacion1+ " reporta el gestor "+ EECC1 + "\n";
            //alert(texto); 
             document.getElementById("f1te2").innerHTML= f1te2 + texto;          

           $("#orden1").val("");
            $("#tecnico1").val("");
            $("#posicion1").val("");
            $("#observacion1").val("");
            $("#EECC1").val("");
         
         }
 
          var texto1 ="\n" + fecha1 + "; " + tiempo1 + "; " +  cedula1 + "; " + "movimiento " + "; " + orden1 + "; " + tecnico1 + "; "
           + posicion1  + "; " + EECC1 + "; " + observacion1 + "\n";
            //alert(texto); 
          document.getElementById("f22te1").innerHTML= f22te1 + texto1;
            $("#orden1").val("");
            $("#tecnico1").val("");
            $("#posicion1").val("");
            $("#observacion1").val("");
            $("#EECC1").val("");

  }
   



}


function copiarDatos2(){
   var fecha2 = document.getElementById("fecha2").value;
   var tiempo2 = document.getElementById("tiempo2").value;
  var cedula2 = document.getElementById("cedula2").value;
  var orden2 = document.getElementById("orden2").value;
  var tecnico2 = document.getElementById("tecnico2").value;
  var EECC2 = document.getElementById("EECC2").value;
  var observacion2 = document.getElementById("observacion2").value;
  var f2te2 = document.getElementById("f2te2").value;
  var f22te1 = document.getElementById("f22te1").value;
  

  if(orden2 == "" || tecnico2=="" || EECC2==""){

     alert ("no es posible continuar campos orden ,tecnico y EECC son necesarios");
     } 

else{    
          var texto = "Retraso en la orden numero " + orden2 + " del técnico " + tecnico2 + "  " + observacion2  +  " se le reporta el gestor "
          + EECC2 + "\n";
            //alert(texto); 
          document.getElementById("f2te2").innerHTML= f2te2 + texto;

         
 
          var texto1 ="\n" + fecha2+ "; "+ tiempo2+ "; "+ cedula2 +"; " + "ajuste de tiempo "+"; " + orden2 +"; " +tecnico2 + "; " + " "  + "; "
          + EECC2 + "; "+ observacion2 + "\n";
            //alert(texto); 
          document.getElementById("f22te1").innerHTML= f22te1 + texto1;
          $("#orden2").val("");
            $("#tecnico2").val("");
            $("#posicion2").val("");
            $("#observacion2").val("");
            $("#EECC2").val("");

   }
   

}



function copiarDatos3(){
   var fecha3 = document.getElementById("fecha3").value;
   var tiempo3 = document.getElementById("tiempo3").value;
  var cedula3 = document.getElementById("cedula3").value;
  var orden3 = document.getElementById("orden3").value;
  var tecnico3 = document.getElementById("tecnico3").value;
  var motivo3 = document.getElementById("motivo3").value;  
  var datos3 = document.getElementById("datos3").value;
  var observacion3 = document.getElementById("observacion3").value;
  var f3te2 = document.getElementById("f3te2").value;
  var f22te1 = document.getElementById("f22te1").value;
  

  if(orden3 == "" || tecnico3=="" || motivo3==""){

     alert ("no es posible continuar campos orden ,tecnico y EECC son necesarios");
     }
     else
     {    
          var texto = "Orden numero " + orden3 + " del técnico " + tecnico3 + ", con el motivo  " + motivo3 + " Observacion " + datos3 +" ,"+ 
          observacion3 +  "\n" ;
            //alert(texto); 
          document.getElementById("f3te2").innerHTML= f3te2 + texto;

         
 
          var texto1 = "\n" + fecha3 + "; "+ tiempo3 + "; "+ cedula3 +"; " + "suspensión " + "; " + orden3 + "; " + tecnico3 + "; " + " "  + "; "
          + motivo3 + "; " + datos3  +  "; " + observacion3  +"\n";
            //alert(texto); 
          document.getElementById("f22te1").innerHTML= f22te1 + texto1;
          $("#orden3").val("");
            $("#tecnico3").val("");            
            $("#observacion3").val("");
            $("#motivo3").val("");
            $("#datos3").val("");

   }
   

}



      
      
      
       
      
     
      
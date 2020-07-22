//vfrifbles
 var fr=('<iframe name="f0te1" id="f0te1" src="https://docs.google.com/forms/d/e/1FAIpQLSe5dhJn-FLYqv-Mb4NPmPmoHyXsO9fh1u3nRGM5CecACwaVmw/viewform" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" style="width:100%;height:260px";></iframe>');
 
 var fr1=('<iframe name="f19te1" id="f19te1" src="https://docs.google.com/forms/u/0/d/e/1FAIpQLSf3ZhoP7z52-wQ1UbEzwhExXYkqhB5llWDMYgzYTwxioIQZow/formResponse" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" style="width:100%;height:1250px;float:center;zoom:20%;";></iframe>');
 
 //var fr2 =('<textarea name="f20te1" id="f20te1" class="fondo1" style="margin: 0px; width: 99%; height: 248px;"><?php include ("../php/historial.php");?></textarea>')
 //var hora=('<h1 id="hora1"><h2 style="float:left;" id="hora2">Hora Ultima Actualización:</h2><input id="hora3" name="hora" type="text" style="width:15%;height:10%;" media="screen" value='<?php date_default_timezone_set ("America/Bogota") ;setlocale(LC_ALL,"es_ES");$fecha=strftime("creado día %d mes %m año %Y hora: %H :%M :%S");$fecha1=strftime("%H:%M:%S"); $contenido="$fecha1";  echo $contenido  ?>'</h1>');
      
 
 $(document).ready(function(){

  $("#f1,#f2,#f3,#f4,#f5,#f6,#f7,#f8,#f9,#f10,#f11,#f12,#f13,#f14,#f15,#f16,#f17,#f18,#f19,#f20,#f21,#f22").hide();
  $("#f1").show(); 
   // $("#f1").show();
    //$("#body").remove();
      $("#f0te1").remove();
          $("#f0").prepend(fr); 

        $("#f19te1").remove();
          $("#f19").prepend(fr1);

     var url = "../php/horario/horario.php" + $("#hora3").val();
             $("#log").text( "URL: [" + url + "]" );

         
           
          //$("#f20te1").remove();
           //$("#f20").prepend('<p class="plata"><b>HISTORIAL</b></p><textarea name="f20te1" id="f20te1" style="margin: 0px; width: 100%; height: 245px;"> <?php include("../index/textarea1.php"); ?> </textarea>" ');
                     

          



 
     //setIntervfl(function(){         
            // $("#f20f").lofd("#f20f");
          // },12000);


     $("#b1").click(function(){      
       $("#f1,#f2,#f3,#f4,#f5,#f6,#f7,#f8,#f9,#f10,#f11,#f12,#f13,#f14,#f15,#f16,#f17,#f18,#f19,#f20,#f21,#f22").hide();
        $("#f1").show(); 

        //actualizar hora
        $("#hora3").load(url).val();
         
        

            

           

       
             
                

          //$("#b1").css("background-color","rgb(255, 222, 0)");

         //$("#hora1,#hora2,#hora3").remove();
          //$("#hora").prepend(hora); 


           //$("#horf1,#horf2").remove();
            //$("#horf").prepend(fr2);

            //$("#tex1").css("heigth","1");
               //$("#f11").css("height","100");          

      
      });

       $("#b2").click(function(){      
         $("#f1,#f2,#f3,#f4,#f5,#f6,#f7,#f8,#f9,#f10,#f11,#f12,#f13,#f14,#f15,#f16,#f17,#f18,#f19,#f20,#f21,#f22").hide();
           $("#f2").show();
            //$("#b2").css("background-color","rgb(93, 190, 63)");


           //actualizar hora
        $("#hora3").load(url).val();
        
      
      });
 
         $("#b3").click(function(){      
         $("#f1,#f2,#f3,#f4,#f5,#f6,#f7,#f8,#f9,#f10,#f11,#f12,#f13,#f14,#f15,#f16,#f17,#f18,#f19,#f20,#f21,#f22").hide();
           $("#f3").show();
           //$("#b3").css("background-color","rgb(202, 154, 219)");

            //actualizar hora
        $("#hora3").load(url).val();
        
      
      });


         $("#b4").click(function(){      
         $("#f1,#f2,#f3,#f4,#f5,#f6,#f7,#f8,#f9,#f10,#f11,#f12,#f13,#f14,#f15,#f16,#f17,#f18,#f19,#f20,#f21,#f22").hide();
           $("#f4").show();
         //actualizar hora
        $("#hora3").load(url).val();  

      
      });


         $("#b5").click(function(){      
         $("#f1,#f2,#f3,#f4,#f5,#f6,#f7,#f8,#f9,#f10,#f11,#f12,#f13,#f14,#f15,#f16,#f17,#f18,#f19,#f20,#f21,#f22").hide();
           $("#f5").show();

           //actualizar hora
        $("#hora3").load(url).val();
           
      
      });


         $("#b6").click(function(){      
         $("#f1,#f2,#f3,#f4,#f5,#f6,#f7,#f8,#f9,#f10,#f11,#f12,#f13,#f14,#f15,#f16,#f17,#f18,#f19,#f20,#f21,#f22").hide();
           $("#f6").show();

           //actualizar hora
        $("#hora3").load(url).val();
      
      });


         $("#b7").click(function(){      
         $("#f1,#f2,#f3,#f4,#f5,#f6,#f7,#f8,#f9,#f10,#f11,#f12,#f13,#f14,#f15,#f16,#f17,#f18,#f19,#f20,#f21,#f22").hide();
           $("#f7").show();

           //actualizar hora
        $("#hora3").load(url).val();
      
      });


         $("#b8").click(function(){      
         $("#f1,#f2,#f3,#f4,#f5,#f6,#f7,#f8,#f9,#f10,#f11,#f12,#f13,#f14,#f15,#f16,#f17,#f18,#f19,#f20,#f21,#f22").hide();
           $("#f8").show();

           //actualizar hora
        $("#hora3").load(url).val();
      
      });


         $("#b9").click(function(){      
         $("#f1,#f2,#f3,#f4,#f5,#f6,#f7,#f8,#f9,#f10,#f11,#f12,#f13,#f14,#f15,#f16,#f17,#f18,#f19,#f20,#f21,#f22").hide();
           $("#f9").show();

           //actualizar hora
        $("#hora3").load(url).val();
      
      });

         $("#b10").click(function(){      
         $("#f1,#f2,#f3,#f4,#f5,#f6,#f7,#f8,#f9,#f10,#f11,#f12,#f13,#f14,#f15,#f16,#f17,#f18,#f19,#f20,#f21,#f22").hide();
           $("#f10").show();

           //actualizar hora
        $("#hora3").load(url).val();
      
      });


         $("#b11").click(function(){      
         $("#f1,#f2,#f3,#f4,#f5,#f6,#f7,#f8,#f9,#f10,#f11,#f12,#f13,#f14,#f15,#f16,#f17,#f18,#f19,#f20,#f21,#f22").hide();
           $("#f11").show();

           //actualizar hora
        $("#hora3").load(url).val();
      
      });

         $("#b12").click(function(){      
         $("#f1,#f2,#f3,#f4,#f5,#f6,#f7,#f8,#f9,#f10,#f11,#f12,#f13,#f14,#f15,#f16,#f17,#f18,#f19,#f20,#f21,#f22").hide();
           $("#f12").show();

           //actualizar hora
        $("#hora3").load(url).val();
      
      });

         $("#b13").click(function(){      
         $("#f1,#f2,#f3,#f4,#f5,#f6,#f7,#f8,#f9,#f10,#f11,#f12,#f13,#f14,#f15,#f16,#f17,#f18,#f19,#f20,#f21,#f22").hide();
           $("#f13").show();
        //actualizar hora
        $("#hora3").load(url).val();
           

      
      });

         $("#b14").click(function(){      
         $("#f1,#f2,#f3,#f4,#f5,#f6,#f7,#f8,#f9,#f10,#f11,#f12,#f13,#f14,#f15,#f16,#f17,#f18,#f19,#f20,#f21,#f22").hide();
           $("#f14").show();
        //actualizar hora
        $("#hora3").load(url).val();   
      
      });

         $("#b15").click(function(){      
         $("#f1,#f2,#f3,#f4,#f5,#f6,#f7,#f8,#f9,#f10,#f11,#f12,#f13,#f14,#f15,#f16,#f17,#f18,#f19,#f20,#f21,#f22").hide();
           $("#f15").show();
        //actualizar hora
        $("#hora3").load(url).val();   
      
      });

         $("#b16").click(function(){      
         $("#f1,#f2,#f3,#f4,#f5,#f6,#f7,#f8,#f9,#f10,#f11,#f12,#f13,#f14,#f15,#f16,#f17,#f18,#f19,#f20,#f21,#f22").hide();
           $("#f16").show();
         //actualizar hora
        $("#hora3").load(url).val();
      
      });

         $("#b17").click(function(){      
         $("#f1,#f2,#f3,#f4,#f5,#f6,#f7,#f8,#f9,#f10,#f11,#f12,#f13,#f14,#f15,#f16,#f17,#f18,#f19,#f20,#f21,#f22").hide();
           $("#f17").show();
        //actualizar hora
        $("#hora3").load(url).val();   
      
      });

         $("#b18").click(function(){      
         $("#f1,#f2,#f3,#f4,#f5,#f6,#f7,#f8,#f9,#f10,#f11,#f12,#f13,#f14,#f15,#f16,#f17,#f18,#f19,#f20,#f21,#f22").hide();
           $("#f18").show();

        //actualizar hora
        $("#hora3").load(url).val();   
      
      });

        $("#b19").click(function(){      
         $("#f1,#f2,#f3,#f4,#f5,#f6,#f7,#f8,#f9,#f10,#f11,#f12,#f13,#f14,#f15,#f16,#f17,#f18,#f19,#f20,#f21,#f22").hide();
           $("#f19").show();

        //actualizar hora
        $("#hora3").load(url).val();           
             
      
      });

        $("#b20").click(function(){      
         $("#f1,#f2,#f3,#f4,#f5,#f6,#f7,#f8,#f9,#f10,#f11,#f12,#f13,#f14,#f15,#f16,#f17,#f18,#f19,#f20,#f21,#f22").hide();                   
          var url = "../php/tipificaciontextarea/historial.php" + $("#f20").val();
             $("#log").text( "URL: [" + url + "]" );
              $("#f20te1").load(url);    
               $("#f20").show();         
               
            //$("#frfme3").css("width","20"); 
            //$("#frfme3").remove();
           // $("#frfme2").prepend(fr);          
        
      }); 


        $("#b21").click(function(){      
         $("#f1,#f2,#f3,#f4,#f5,#f6,#f7,#f8,#f9,#f10,#f11,#f12,#f13,#f14,#f15,#f16,#f17,#f18,#f19,#f20,#f21,#f22").hide();
           var url = "../php/hora.php" + $("#f21").val();
             $("#log").text( "URL: [" + url + "]" );
              $("#f21te1").load(url);    
               $("#f21").show();  
            //$("#frfme3").css("width","20"); 
            //$("#frfme3").remove();
            //$("#frfme2").prepend(fr); 

    });  

        $("#b22").click(function(){      
         $("#f1,#f2,#f3,#f4,#f5,#f6,#f7,#f8,#f9,#f10,#f11,#f12,#f13,#f14,#f15,#f16,#f17,#f18,#f19,#f20,#f21,#f22").hide();
           $("#f22").show();

        //actualizar hora
        $("#hora3").load(url).val();           
             
      
      });

         
        
      
});
       
   
      

         

   



   



$(document).ready(function(){
    
      //Cambio-imagen function
    $(document).on("click", "#cambioImagen", function(){
        $("#contenedor").html("<input type='file' name='ciu_imagen'>");
    });
    
    //Filtro-ciudad function
    $(document).on("keyup", "#filtro", function(){
        var buscar=$(this).val();
        var url=$(this).attr('data-url');
        
        $.ajax({
            url:url, 
            data:"buscar="+buscar,
            type:"POST",
            
            success:function(datos){
                $("tbody").html(datos);
            }
        });
    });
    
    
    
    
    //Filtro-departamento function
    $(document).on("keyup", "#filtroDep", function(){
        var buscar=$(this).val();
        var url=$(this).attr('data-url');
        
        $.ajax({
            url:url, 
            data:"buscarDep="+buscar,
            type:"POST",
            
            success:function(datos){
                $("tbody").html(datos);
            }
        });
    });
    
    //Registro_Masivo-ciudad function
    $(document).on("click", "#agregar", function(){
        var contenido=$('#copy').html();
        
        $('tbody').append("<tr>"+contenido+"</tr>");
    });
    
    $(document).on("click", "#eliminar", function(){
        
        $(this).parent().parent().remove();
        $("#seri2").text("");
    });
    
    //Registro_Masivo-departamento function
    $(document).on("click", "#agregarDep", function(){
        var contenidoDep=$('#copyDep').html();
        
        $('tbody').append("<tr>"+contenidoDep+"</tr>");
    });
    
    $(document).on("click", "#eliminarDep", function(){
        
        $(this).parent().parent().remove();
    });
    
    //Mostrar_Clave-editar_usuario function
    $(document).on("click", "#pass", function(){
        
        if (($("#inputPass1").attr('type')=="password") && ($("#inputPass2").attr('type')=="password")) {
            
            $("#inputPass1").attr('type', 'text');
            $("#inputPass2").attr('type', 'text');
            $("#pass").html('Hide Pass');
        } else {
            
            $("#inputPass1").attr('type', 'password');
            $("#inputPass2").attr('type', 'password');
            $("#pass").html('Show Pass');
        }
    });
    //-----------------filtro equipo--------------------
    
    $(document).on("keyup", "#filtro", function(){
        var buscar=$(this).val();
        var url=$(this).attr('data-url');
        
        $.ajax({
            url:url, 
            data:"buscar="+buscar,
            type:"POST",
            
            success:function(datos){
                $("tbody").html(datos);
            }
        });
    });
    
    //-----------------filtro intervencion--------------------
    
    $(document).on("keyup", "#filtro1", function(){
        var buscar=$(this).val();
        var url=$(this).attr('data-url');
        
        $.ajax({
            url:url, 
            data:"buscar="+buscar,
            type:"POST",
            
            success:function(datos){
                $("tbody").html(datos);
            }
        });
    });
    
    //-----------------filtro Remision--------------------
    
    $(document).on("keyup", "#filtro2", function(){
        var buscar=$(this).val();
        var url=$(this).attr('data-url');
        
        $.ajax({
            url:url, 
            data:"buscar="+buscar,
            type:"POST",
            
            success:function(datos){
                $("tbody").html(datos);
            }
        });
    });
    
    //---------------------validacion equipo----------------------------
    var descrip=false;
    var sistema=false;
    var caracte=false;
    var acceso=false;
    var usuari=false;
    var valo=false;
    var cent=false;
    var ma=false;
    var ti=false;
    var provee=false;
    var garan=false;
    var licen=false;
    var off=false;
    
    
    $(document).ready(function(){
        
        var desc=$('#descripcion').val();
        var siste=$('#sistema').val();
        var cara=$('#caracter').val();
        var acces=$('#acce').val();
        var usu=$('#usuar').val();
        var va=$('#val').val();
        var cen=$('#centro').val();
        var mar=$('#marc').val();
        var tip=$('#tipo').val();
        var proveedo=$('#prove').val();
        var garanti=$('#mes').val();
        var li=$('#sist').val();
        var offi=$('#office').val();
        
        
        
        if(desc!=""&& ser!=""){
            
        }else{
            
            $('#boton1').html('<input type="submit" disabled id="enviar1" value="Enviar" class="btn btn-success btn-block">');
        }
        
        // 
    });
    
    $('#centro').on('change',function(){
        var cen=$('#centro').val();
        if(cen !=''){
            $('#mensajeError10').remove();
            cent=true;
        }else{
            $('#operacion').html('<p id="mensajeError10" style="color:rgb(255,0,0,0.7);"><b>Ese campo es obligatorio</b></p>'); 
            cent=false;
        }
    });
    
    $('#marc').on('change',function(){
        var mar=$('#marc').val();
        if(mar !=''){
            $('#mensajeError11').remove();
            ma=true;
        }else{
            $('#marca').html('<p id="mensajeError11" style="color:rgb(255,0,0,0.7);"><b>Ese campo es obligatorio</b></p>'); 
            ma=false;
        }
    });
    
    $('#tipo').on('change',function(){
        var tip=$('#tipo').val();
        if(tip !=''){
            $('#mensajeError12').remove();
            ti=true;
        }else{
            $('#equipo1').html('<p id="mensajeError12" style="color:rgb(255,0,0,0.7);"><b>Ese campo es obligatorio</b></p>'); 
            ti=false;
        }
    });
    
    $('#prove').on('change',function(){
        var proveedo=$('#prove').val();
        if(proveedo !=''){
            $('#mensajeError13').remove();
            provee=true;
        }else{
            $('#proveedor').html('<p id="mensajeError13" style="color:rgb(255,0,0,0.7);"><b>Ese campo es obligatorio</b></p>'); 
            provee=false;
        }
    });
    
    $('#office').on('change',function(){
        var offi=$('#office1').val();
        
        if(offi !=''){
            $('#mensajeError16').remove();
            off=true;
        }else{
            $('#paquete').html('<p id="mensajeError16" style="color:rgb(255,0,0,0.7);"><b>Ese campo es obligatorio</b></p>'); 
            off=false;
        }
    });
    
    
    
    $('#tipo').on('click',function(){

        var tipo=$('#tipo').val();
        if(tipo==1){
            $(".balanza").css("display", "block");
        }else{
            $(".balanza").css("display", "none");

        }
        if(tipo==2 || tipo==5){
            $(".compu").css("display", "block");
        }else{
            $(".compu").css("display", "none");

        }
        if(tipo==6){
            $(".vehiculo").css("display", "block");
        }else{
            $(".vehiculo").css("display", "none");

        }
    });
    
    
    $('#sistema').on('click',function(){
        var siste=$('#sistema').val();
        
        if(siste !=''){
            $('#mensajeError4').remove();
            sistema=true;
        }else{
            $('#operativo').html('<p id="mensajeError4" style="color:rgb(255,0,0,0.7);"><b>Ese campo es obligatorio</b></p>'); 
            sistema=false;
        }
        
        if(siste==1 || siste==2 || siste==3){
            
            $('#sitem').css("display", "block");
            
            $("#office").css("display", "block");
            $("#licencia_office").css("display", "block");
            
            $("#antivirus").css("display", "block");
            $("#licencia_antivirus").css("display", "block");
            
        }else{
            
            $("#licencia").removeClass("form-group col-md-6");
            
            $("#office").css("display", "none");
            $("#licencia_office").css("display", "none");
            
            $("#antivirus").css("display", "none");
            $("#licencia_antivirus").css("display", "none");
            
            $('#sitem').css("display", "none");
            
        }
    });
    
    
    $('#equipo').on('keyup',function(){
        var desc=$('#descripcion').val();
        var siste=$('#sistema').val();
        var cara=$('#caracter').val();
        var acces=$('#acce').val();
        var usu=$('#usuar').val();
        var va=$('#val').val();
        var garanti=$('#mes').val();
        var li=$('#sist').val();
        var cen=$('#centro').val();
        
        
        if(desc !=''){
            $('#mensajeError').remove();
            descrip=true;
        }else{
            
            $('#descripci').html('<p id="mensajeError" style="color:rgb(255,0,0,0.7);"><b>Ese campo es obligatorio</b></p>');
            descrip=false;
        }
        
        if(cara !=''){
            $('#mensajeError5').remove();
            caracte=true;
        }else{
            $('#caracteristicas').html('<p id="mensajeError5" style="color:rgb(255,0,0,0.7);"><b>Ese campo es obligatorio</b></p>'); 
            caracte=false;
        }
        
        if(acces !=''){
            $('#mensajeError6').remove();
            acceso=true;
        }else{
            $('#accesorio').html('<p id="mensajeError6" style="color:rgb(255,0,0,0.7);"><b>Ese campo es obligatorio</b></p>'); 
            acceso=false; 
        }
        
        if(usu !=''){
            $('#mensajeError7').remove();
            usuari=true;   
        }else{
            $('#usuario').html('<p id="mensajeError7" style="color:rgb(255,0,0,0.7);"><b>Ese campo es obligatorio</b></p>'); 
            usuari=false;
        }
        
        if(va !=''){
            $('#mensajeError8').remove();
            valo=true;   
        }else{
            $('#valor').html('<p id="mensajeError8" style="color:rgb(255,0,0,0.7);"><b>Ese campo es obligatorio</b></p>'); 
            valo=false;
        }
        
        if(garanti !=''){
            $('#mensajeError14').remove();
            garan=true;   
        }else{
            $('#garantia').html('<p id="mensajeError14" style="color:rgb(255,0,0,0.7);"><b>Ese campo es obligatorio</b></p>'); 
            garan=false;
        }
        
        if(cen !=''){
            $('#mensajeError10').remove();
            cent=true;
        }else{
            $('#operacion').html('<p id="mensajeError10" style="color:rgb(255,0,0,0.7);"><b>Ese campo es obligatorio</b></p>'); 
            cent=false;
        }
        
        if(descrip==true && caracte==true && acceso==true && usuari==true && valo==true && garan==true){
            
            $('#boton1').html('<input type="submit" id="enviar" value="Enviar" class="btn btn-success btn-block">');
        }else{
            $('#boton1').html('<input type="submit" disabled id="enviar1" value="Enviar" class="btn btn-success btn-block">');
        }
        
    });
    
    $(document).on("keyup", "#seri", function(){
        var seri=$(this).val();
        var url=$(this).attr('data-url');
    
        $.ajax({
            url:url, 
            data:"seri="+seri,
            type:"POST",
            
            success:function(datos){
              
                if(datos!=''){
                    $("#d1").css("display", "block");
                    $("#d1").html(datos); 


                    $('#serial').html('<p id="mensajeE" style="color:rgb(255,0,0,0.7);"><b>Este serial ya se encuentra registrado</b></p>'); 
                    
                    console.log(datos);
                }else{
                    $("#d1").css("display", "none");
              
                    $('#mensajeE').css("display", "none");
                 
                }
                
            }
        });
    });


    $(document).on("keyup", "#seri2", function(){
        var seri=$(this).val();
        var url=$(this).attr('data-url');
      
    
        $.ajax({
            url:url, 
            data:"seri="+seri,
            type:"POST",
            
            success:function(dato){
              
                if(dato!=''){
               
                    $("#cop").css("display", "block");
                    $("#cop").html(dato); 

                    $('#serial').html('<p id="mensajeE" style="color:rgb(255,0,0,0.7);"><b>Este serial ya se encuentra registrado</b></p>'); 
                    
                    console.log(dato);
                }else{
                   
                    $("#cop").css("display", "none");
                    $('#mensajeE').css("display", "none");
                 
                }
                
            }
        });
    });

    //validar si el serial ya existe
    
    
    $(document).on("keyup", "#seri", function(){
        var seri=$(this).val();
        var url=$(this).attr('data-url');
        
        $.ajax({
            url:url, 
            data:"seri="+seri,
            type:"POST",
            
            success:function(datos1){
                console.log(datos1);
                if(datos1!=''){
                    $("#d2").css("display", "block");
                    $("#d2").html(datos1);
                    
                  
                }else{
                    $("#d2").css("display", "none");
                   
                }
                
            }
        });
    });
    
    //----------------------fin de equipo-----------------------------
    //--------------------validacion de intervencion--------------------
    
    var deta=false;
    var reali=false;
    var valo=false;
    
    $("#enviar").on("click",function(){
        
        var detalle=$("detalle").val;
        
        if(detalle!=''){
            $('#boton').html('<input type="submit" id="enviar" value="Enviar" class="btn btn-success btn-block">');
        }
    });
    
    $("#pre").on("click",function(){
        
        if($('#pre').prop('checked')){
            
            $( "#corr" ).prop( "disabled", true );
        }else{
            
            $( "#corr" ).prop( "disabled", false ); 
        }
    });
    
    $("#corr").on("click",function(){
        
        if($('#corr').prop('checked')){
            $( "#pre" ).prop( "disabled", true );
        }else{
            $( "#pre" ).prop( "disabled", false ); 
        }
    });
    
    $(document).ready(function(){
        
        var detalle=$('#detalle').val();
        var ser=$('#seri').val();
        var fij=$('#fijo').val();
        
        if(detalle!=""){
            
        }else{
            
            $('#boton').html('<input type="submit" disabled id="enviar1" value="Enviar" class="btn btn-success btn-block">');
        }
        // 
    });
    
    $('#intervencion').on('keyup', function(){
        
        var detalle=$('#detalle').val();
        var realizado=$('#real').val();
        var valor=$('#valor').val();
        
        if(detalle !=''){
            $('#mensajeError').remove();
            deta=true;
        }else{
            
            $('#Mensaje').html('<p id="mensajeError" style="color:rgb(255,0,0,0.7);"><b>Ese campo es obligatorio</b></p>');
            deta=false;
        }
        
        if(realizado !=''){
            $('#mensajeError1').remove();
            reali=true;
        }else{
            $('#realizado').html('<p id="mensajeError1" style="color:rgb(255,0,0,0.7);"><b>Ese campo es obligatorio</b></p>');
            reali=false;
        }
        
        if(valor !=''){
            $('#mensajeError2').remove();
            valo=true;
        }else{
            $('#val').html('<p id="mensajeError2" style="color:rgb(255,0,0,0.7);"><b>Ese campo es obligatorio</b></p>');
            valo=false;
        }
        
        if(deta==true && reali==true && valo==true){
            $('#boton').html('<input type="submit" id="enviar" value="Enviar" class="btn btn-success btn-block">');
        }else{
            $('#boton').html('<input type="submit" disabled id="enviar1" value="Enviar" class="btn btn-success btn-block">');
        }
    });
    
    //-------------------fin de intervencion--------------------------
    
    //--------------------Validacion de Remision-----------------------
    
    var des=false;
    var em=false;
    var di=false;
    var fun=false;
    var se=false;
    var fi=false;
    var despacha=false;
    var trans=false;
    var mo=false;
    var ar=false;
    var de=false;
    var ci=false;
    
    
    $("#enviar").on("click",function(){
        
        var descrip=$("descrip").val;
        
        if(descrip!=''){
            $('#boton2').html('<input type="submit" id="enviar" value="Enviar" class="btn btn-success btn-block">');
        }
    });
    
    
    
    $("#tempo").on("click",function(){
        
        if($('#tempo').prop('checked')){
            
            $( "#defi" ).prop( "disabled", true );
            $("#devolucion").css("display", "block");
        }else{
            
            $( "#defi" ).prop( "disabled", false ); 
            $("#devolucion").css("display", "none");
        }
    });
    
    $("#defi").on("click",function(){
        
        if($('#defi').prop('checked')){
            $( "#tempo" ).prop( "disabled", true );
        }else{
            $( "#tempo" ).prop( "disabled", false ); 
        }
    });
    
    $(document).on("change","#depto",function(){
        var url=$(this).attr('data-url');
        var id=$(this).val();
        
        console.log(id);
        console.log(url);
        
        $.ajax({
            url:url,
            data:"id="+id,
            type:"POST",
            success:function(datos){
                console.log(datos);
                $("#ciudad").html(datos);
            }
        });
    });
    
    $(document).ready(function(){
        
        var descrip=$('#descrip').val();
        var empre=$('#empres').val();
        var dire=$('#direcci').val();
        var funci=$('#funciona').val();
        var ser=$('#seri').val();
        var fij=$('#fijo').val();
        var despa=$('#despa').val();
        var tra=$('#transpor').val();
        var mot=$('#motiv').val();
        var a=$('#are').val();
        var depar=$('#depto').val();
        var ciu=$('#ciudad').val();
        
        if(descrip!=""){
            
        }else{
            
            $('#boton2').html('<input type="submit" disabled id="enviar2" value="Enviar" class="btn btn-success btn-block">');
        }
        // 
    });
    
    $('#despa').on('click',function(){
        var despa=$('#despa').val();
        if(despa !=''){
            $('#mensajeError8').remove();
            despacha=true;
        }else{
            $('#despachado').html('<p id="mensajeError8" style="color:rgb(255,0,0,0.7);"><b>Ese campo es obligatorio</b></p>'); 
            despacha=false;
        }
    });
    
    $('#transpor').on('click',function(){
        var tra=$('#transpor').val();
        if(tra !=''){
            $('#mensajeError9').remove();
            trans=true;
        }else{
            $('#transportado').html('<p id="mensajeError9" style="color:rgb(255,0,0,0.7);"><b>Ese campo es obligatorio</b></p>'); 
            trans=false;
        }
    });
    
    $('#motiv').on('click',function(){
        var mot=$('#motiv').val();
        if(mot !=''){
            $('#mensajeError10').remove();
            mo=true;
        }else{
            $('#motivo').html('<p id="mensajeError10" style="color:rgb(255,0,0,0.7);"><b>Ese campo es obligatorio</b></p>'); 
            mo=false;
        }
    });
    
    $('#are').on('click',function(){
        var a=$('#are').val();
        if(a !=''){
            $('#mensajeError11').remove();
            ar=true;
        }else{
            $('#area').html('<p id="mensajeError11" style="color:rgb(255,0,0,0.7);"><b>Ese campo es obligatorio</b></p>'); 
            ar=false;
        }
    });
    
    $('#depto').on('click',function(){
        var depar=$('#depto').val();
        if(depar !=''){
            $('#mensajeError12').remove();
            de=true;
        }else{
            $('#depart').html('<p id="mensajeError12" style="color:rgb(255,0,0,0.7);"><b>Ese campo es obligatorio</b></p>'); 
            de=false;
        }
    });
    
    $('#ciudad').on('click',function(){
        var ciu=$('#ciudad').val();
        if(ciu !=''){
            $('#mensajeError13').remove();
            ci=true;
        }else{
            $('#ciudad_1').html('<p id="mensajeError13" style="color:rgb(255,0,0,0.7);"><b>Ese campo es obligatorio</b></p>'); 
            ci=false;
        }
    });
    
    $('#remision').on('keyup', function(){
        
        var descrip=$('#descrip').val();
        var empre=$('#empres').val();
        var dire=$('#direcci').val();
        var funci=$('#funciona').val();
        var ser=$('#seri').val();
        var fij=$('#fijo').val();
        
        
        if(descrip !=''){
            $('#mensajeError').remove();
            des=true;
        }else{
            
            $('#descripcion').html('<p id="mensajeError" style="color:rgb(255,0,0,0.7);"><b>Ese campo es obligatorio</b></p>');
            des=false;
        }
        
        if(empre !=''){
            $('#mensajeError2').remove();
            em=true;
        }else{
            
            $('#empresa').html('<p id="mensajeError2" style="color:rgb(255,0,0,0.7);"><b>Ese campo es obligatorio</b></p>');
            em=false;
        }
        
        if(dire !=''){
            $('#mensajeError3').remove();
            di=true;
        }else{
            
            $('#direccion').html('<p id="mensajeError3" style="color:rgb(255,0,0,0.7);"><b>Ese campo es obligatorio</b></p>');
            di=false;
        }
        
        if(funci !=''){
            $('#mensajeError4').remove();
            fun=true;
        }else{
            
            $('#funcionario').html('<p id="mensajeError4" style="color:rgb(255,0,0,0.7);"><b>Ese campo es obligatorio</b></p>');
            fun=false;
        }
        
        if(ser !=''){
            $('#mensajeError5').remove();
            se=true;
        }else{
            
            $('#serie').html('<p id="mensajeError5" style="color:rgb(255,0,0,0.7);"><b>Ese campo es obligatorio</b></p>');
            se=false;
        }
        
        if(fij !=''){
            $('#mensajeError6').remove();
            fi=true;
        }else{
            
            $('#activo').html('<p id="mensajeError6" style="color:rgb(255,0,0,0.7);"><b>Ese campo es obligatorio</b></p>');
            fi=false;
        }
        
        
        if(des==true && em==true && di==true && fun==true && se==true && fi==true){
            $('#boton2').html('<input type="submit" id="enviar" value="Enviar" class="btn btn-success btn-block">');
        }else{
            $('#boton2').html('<input type="submit" disabled id="enviar2" value="Enviar" class="btn btn-success btn-block">');
        }
        
    });
    //-------------------------Fin de Remision-------------------------
    //---------------------Validacion de Marca-------------------------
    var descrip=false;
    
    $("#enviar").on("click",function(){
        
        var descri=$("descri").val;
        
        if(descri!=''){
            $('#boton3').html('<input type="submit" id="enviar" value="Enviar" class="btn btn-success btn-block">');
        }
    });
    
    $(document).ready(function(){
        
        var descri=$('#descri').val();
        
        if(descri!=""){
            
        }else{
            
            $('#boton3').html('<input type="submit" disabled id="enviar3" value="Enviar" class="btn btn-success btn-block">');
        }
        // 
    });
    
    $('#marca').on('keyup', function(){
        
        var descri=$('#descri').val();
        
        
        if(descri !=''){
            $('#mensajeError').remove();
            descrip=true;
        }else{
            
            $('#marca').html('<p id="mensajeError" style="color:rgb(255,0,0,0.7);"><b>Ese campo es obligatorio</b></p>');
            descrip=false;
        }
        
        
        if(descrip==true){
            $('#boton3').html('<input type="submit" id="enviar" value="Enviar" class="btn btn-success btn-block">');
        }else{
            $('#boton3').html('<input type="submit" disabled id="enviar3" value="Enviar" class="btn btn-success btn-block">');
        }
    });
    //-------------------------Fin Marca-------------------------------
    //------------------------VAlidacion Empleado-----------------------
    var nomb=false;
    
    $("#enviar").on("click",function(){
        
        var nombe=$("nom").val;
        
        if(nombe!=''){
            $('#boton5').html('<input type="submit" id="enviar" value="Enviar" class="btn btn-success btn-block">');
        }
    });
    
    $(document).ready(function(){
        
        var nombe=$("nom").val;
        
        if(nombe!=""){
            
        }else{
            
            $('#boton5').html('<input type="submit" disabled id="enviar5" value="Enviar" class="btn btn-success btn-block">');
        }
        // 
    });
    
    $('#empleado').on('keyup', function(){
        
        var nombe=$('#nom').val();
        
        
        if(nombe !=''){
            $('#mensajeError').remove();
            nomb=true;
        }else{
            
            $('#nombre').html('<p id="mensajeError" style="color:rgb(255,0,0,0.7);"><b>Ese campo es obligatorio</b></p>');
            nomb=false;
        }
        
        
        if(nomb==true){
            $('#boton5').html('<input type="submit" id="enviar" value="Enviar" class="btn btn-success btn-block">');
        }else{
            $('#boton5').html('<input type="submit" disabled id="enviar5" value="Enviar" class="btn btn-success btn-block">');
        }
    });
    //------------------------Fin Empleado----------------------------
    //----------------------Validacion de Adjudicacion----------------
    var descrip=false;
    var n=0;
    $(document).on("click", "#agregar", function(){
        var contenido=$('#copia').html();
        n=n+1;
        $('#nuevo').append("<div>"+contenido+"</div>");
  
          
            //$("#seri").attr("id","sera"+n);
         
    });

    $(document).on("click", "#eliminar", function(){

        $(this).parent().parent().remove();

    });

    $("#enviar").on("click",function(){
        
        var descri=$("descripci").val;
        
        if(descri!=''){
            $('#boton4').html('<input type="submit" id="enviar" value="Enviar" class="btn btn-success btn-block">');
        }
    });
    
    $(document).ready(function(){
        
        var descri=$('#descripci').val();
        
        if(descri!=""){
            
        }else{
            
            $('#boton4').html('<input type="submit" disabled id="enviar4" value="Enviar" class="btn btn-success btn-block">');
        }
        // 
    });
    
    $('#adjudicacion').on('keyup', function(){
        
        var descri=$('#descripci').val();
        
        
        if(descri !=''){
            $('#mensajeError').remove();
            descrip=true;
        }else{
            
            $('#descripcion').html('<p id="mensajeError" style="color:rgb(255,0,0,0.7);"><b>Ese campo es obligatorio</b></p>');
            descrip=false;
        }
        
        
        if(descrip==true){
            $('#boton4').html('<input type="submit" id="enviar" value="Enviar" class="btn btn-success btn-block">');
        }else{
            $('#boton4').html('<input type="submit" disabled id="enviar4" value="Enviar" class="btn btn-success btn-block">');
        }
    });

    $(document).on("keyup", "#nombre2", function(){
        var nom=$(this).val();
        var url=$(this).attr('data-url');
    
        $.ajax({
            url:url, 
            data:"nom="+nom,
            type:"POST",
            
            success:function(dato){
              console.log(dato);
                if(dato!=''){

                    $('#empleado').html('<p id="mensajeE1" style="color:#8A8C8C;"><b>'+dato+'</b></p>'); 
                    
                }else{
                   
                    $('#mensajeE1').css("display", "none");
                 
                }
                
            }
        });
    });
    
    $(document).on("keyup", "#recibo", function(){
        var nom=$(this).val();
        var url=$(this).attr('data-url');
    
        $.ajax({
            url:url, 
            data:"nom="+nom,
            type:"POST",
            
            success:function(dato){
              console.log(dato);
                if(dato!=''){

                    $('#recibido1').html('<p id="mensajeE2" style="color:#8A8C8C;"><b>'+dato+'</b></p>'); 
                    
                }else{
                   
                    $('#mensajeE2').css("display", "none");
                 
                }
                
            }
        });
    });

    $(document).on("keyup", "#entre", function(){
        var nom=$(this).val();
        var url=$(this).attr('data-url');
    
        $.ajax({
            url:url, 
            data:"nom="+nom,
            type:"POST",
            
            success:function(dato){
              console.log(dato);
                if(dato!=''){

                    $('#entrega1').html('<p id="mensajeE3" style="color:#8A8C8C;"><b>'+dato+'</b></p>'); 
                    
                }else{
                   
                    $('#mensajeE3').css("display", "none");
                 
                }
                
            }
        });
    });

    $(document).on("keyup", "#cop", function(){
        var nom=$(this).val();
        var url=$(this).attr('data-url');
    
        $.ajax({
            url:url, 
            data:"nom="+nom,
            type:"POST",
            
            success:function(dato){
              console.log(dato);
                if(dato!=''){

                    $('#copia1').html('<p id="mensajeE4" style="color:#8A8C8C;"><b>'+dato+'</b></p>'); 
                    
                }else{
                   
                    $('#mensajeE4').css("display", "none");
                 
                }
                
            }
        });
    });

    $(document).on("keyup", "#contabi", function(){
        var nom=$(this).val();
        var url=$(this).attr('data-url');
    
        $.ajax({
            url:url, 
            data:"nom="+nom,
            type:"POST",
            
            success:function(dato){
              console.log(dato);
                if(dato!=''){

                    $('#contabilizado1').html('<p id="mensajeE5" style="color:#8A8C8C;"><b>'+dato+'</b></p>'); 
                    
                }else{
                   
                    $('#mensajeE5').css("display", "none");
                 
                }
                
            }
        });
    });
    //--------------------------Fin Adjudicacion----------------------
    //--------------------Validacion de Proveedor---------------------
    var prove=false;
    
    $("#enviar").on("click",function(){
        
        var prov=$("pro").val;
        
        if(prov!=''){
            $('#boton7').html('<input type="submit" id="enviar" value="Enviar" class="btn btn-success btn-block">');
        }
    });
    
    $(document).ready(function(){
        
        var prov=$('#pro').val();
        
        if(prov!=""){
            
        }else{
            
            $('#boton7').html('<input type="submit" disabled id="enviar7" value="Enviar" class="btn btn-success btn-block">');
        }
        // 
    });
    
    $('#proveedor').on('keyup', function(){
        
        var prov=$('#pro').val();
        
        
        if(prov !=''){
            $('#mensajepro').remove();
            prove=true;
        }else{
            
            $('#proveedor').html('<p id="mensajepro" style="color:rgb(255,0,0,0.7);"><b>Ese campo es obligatorio</b></p>');
            prove=false;
        }
        
        
        if(prove==true){
            $('#boton7').html('<input type="submit" id="enviar" value="Enviar" class="btn btn-success btn-block">');
        }else{
            $('#boton7').html('<input type="submit" disabled id="enviar7" value="Enviar" class="btn btn-success btn-block">');
        }
    });
    //----------------------------Fin de Proveedor------------------------

    
    //Show modal function
    $(document).on("click", "#botoncito", function(){
        var url=$(this).attr('data-url');

        $.ajax({
            url:url,
            success:function(datos) {
                
            $("#contenido").html(datos);
            $("#modal").modal('show');
             }
        });
    });
    
    window.setTimeout(function(){
        $("#alert").alert('close')
    },3000);
    
    $(document).on("click",".eliminar",function(){
        var url=$(this).attr('data-url');
        $ajax({
            url:url,
            success:function(datos){
                $("#contenido").html(datos);
            }
        });
    });
    window.setTimeout(function(){
        $("#alert").alert('close')
    },4000);
    
    
    
    /*$(document).on("keyup",".validar",function(){
        let texto=$(this).val();
        let noValidos="!¡#$%&/()=?¿_-[]{}|°<>@;:.,´´*'";
        let cont=0;
        
        for(let i=0; i<texto.length;i++){
            for (let k=0; k<noValidos.length;k++) {
                if (texto[i]==noValidos[k]) {
                    cont++;
                }
            }
        }
        if (cont>0) {
            $(this).removeClass('is-valid');
            $(this).addClass('is-invalid');
            $("#enviar").attr('disabled',true);
        }else{
            $(this).removeClass('is-invalid');
            $(this).addClass('is-valid');
            $("#enviar").attr('disabled',false);
        }
        
    });*/

    $("#form").validate({
        rules:{
            usu_nombre:"required",
            usu_apellido:"required",
            usu_correo:"required"
        }
    });
    
    //--------funcion de la datatable------------
    $(document).ready(function() {
        $('#example').DataTable({
            "language":{
                "lengthMenu":"Mostrar Menu registro",
                "zeroRecords":"No se encontraron resultados",
                "info":"Mostrar registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sSearch":"Buscar",
                "oPaginate":{
                    "sFirst":"Primero",
                    "sLast":"Ultimo",
                    "sNext":"Siguiente",
                    "sPrevious":"Ultimo",
                }
            }
        });
        
    } );
});

  //function alerta para eliminar 
  function alertEliminar(id,accion){
    id1=id;
    if(accion==0){
    Swal.fire({
        
        title: '¿Esta seguro de Inhabilitar?',
        text: "¡No volveras a usar este producto!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: '¡Si, Inhabilitar!'
      }).then((result) => {
        if (result.isConfirmed) {
            eliminarproc(id1,accion);
        }
      })
    }else{
        Swal.fire({
        
            title: '¿Esta seguro de Habilitar?',
            text: "¡volveras a usar este producto!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: '¡Si, Habilitar!'
          }).then((result) => {
            if (result.isConfirmed) {
                eliminarproc(id1,accion);
            }
          })
    }
}

//fuction para eliminar registro

function eliminarproc(id,accion){
    $.ajax({
        url:'ajax.php?modulo=Equipo&controlador=Equipo&funcion=Eliminar',
        data:"id="+id+"&accion="+accion,
        success:function() { 
        var table = $('#tblistado').DataTable();
        table.ajax.reload(); 
        if(accion==0){
            Swal.fire(
                'Inhabilitado!',
                'El producto fue Inhabilitado correctamente.',
                'success'
              )
            }else{
                Swal.fire(
                    'Habilitado!',
                    'El producto fue Habilitado correctamente.',
                    'success'
                  )
            }
            AutoReload();
         }
    });
}

function AutoReload() {
    setTimeout(function() {
        window.location.reload();
    },1000);
}

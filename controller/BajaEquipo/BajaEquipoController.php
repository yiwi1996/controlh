<?php
include_once '../model/BajaEquipo/BajaEquipoModel.php';
require_once '../controller/dompdf1/autoload.inc.php';
use Dompdf\Dompdf;

class BajaEquipoController{
    
    public function pdf(){
        $obj=new BajaEquipoModel();
        $id_baja=$_GET['id_baja'];
        
        $sql="SELECT num_pdf FROM baja WHERE id_baja=$id_baja";
        $resul=$obj->consult($sql);
        $result=mysqli_fetch_assoc($resul);
        $id_pdf=$result['num_pdf'];
        
        
        
        echo '<div class="modal-header" style="width: 100% ;">
        <h5 class="modal-title" id="exampleModalLabel">Detalle de Baja de Activos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div><object tipe="application/pdf" data="../files/bajaEquipo/'.  $id_pdf.'/'.$id_pdf.'bajaEquipo.pdf" " width="100%"     height="700px"></object> <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
        </div>';
        
    }
    
    public function getCreate(){
        
        include_once '../view/bajaEquipo/create.php';
    }
    
    public function postCreate(){

        $obj=new BajaEquipoModel();
        
        
        $factura=$_POST['factura'];
        $nit=$_POST['nit'];
        $fecha_baja=$_POST['fecha_baja'];
        $asunto_baja=$_POST['asunto_baja'];
        $equipo_baja=$_POST['equipo_baja'];
        $activo_baja=$_POST['activo_baja'];
        $serial_baja=$_POST['serial_baja'];
        $descripcion=$_POST['descripcion'];
        $valor=$_POST['valor'];
        $marca=$_POST['marca'];
        $validado_baja=$_POST['validado_baja'];
        $elaborado_baja=$_POST['elaborado_baja'];
        $autorizado_baja=$_POST['autorizado_baja'];
        $contabilizado_baja=$_POST['contabilizado_baja'];
        $id_pdf=$obj->autoincrement("baja","id_baja");
        
      

        $empleado=array();
        $baja=array();
        $empleado1=array();

        $regi=count($activo_baja);

      

        if($regi>1){
        
        for ($i=1; $i < count($activo_baja); $i++) { 
            
            $id_baja=$obj->autoincrement("baja","id_baja");
            
            $sql="INSERT INTO baja VALUES ($id_baja,'".$factura[$i]."','".$nit[$i]."','".$fecha_baja."','".$asunto_baja."','".$equipo_baja[$i]."','".$activo_baja[$i]."','".$serial_baja[$i]."','".$descripcion[$i]."','".$valor[$i]."','".$marca[$i]."','".$validado_baja."','".$elaborado_baja."','".$autorizado_baja."','".$contabilizado_baja."',$id_pdf)";
            
            $insertar=$obj->insert($sql);
            
            $sql="SELECT serial_baja,activo_baja,descripcion,valor FROM baja WHERE id_baja=$id_baja";

           
            
            $equipo[$i]=$obj->insert($sql);

            $sql="SELECT id FROM equipos WHERE serial='".$serial_baja[$i]."'";
            dd($sql);
            $equi=$obj->insert($sql);
            $equi=mysqli_fetch_assoc($equi);
            $id[$i]=$equi['id'];
            
            $sql="SELECT e.id,e.num_factura,e.serial,e.tipo_equipo,e.activo_fijo,t.desc_tipo_equipo,e.desc_equipo,m.desc_marca,e.caracteristicas,e.accesorios,e.usuario,p.nombre,e.fecha_compra,e.garantia,e.Fecha_fin_garantia,e.valor,es.nombre_estado FROM equipos e,tipo_equipo t,marcas m,proveedor p,estado es,co c WHERE  t.id=e.tipo_equipo AND  m.id=e.id_marca AND p.nit=e.nit AND es.id_estado=e.id_estado AND c.id=e.co AND e.serial='".$serial_baja[$i]."'";

            $equipo1=$obj->insert($sql);

            $sql="SELECT p.nombre,p.direccion,p.barrio,p.contacto,p.telefono FROM equipos e,proveedor p WHERE  p.nit=e.nit AND e.serial='".$serial_baja[$i]."'";

            $proveedor=$obj->insert($sql);

            $sql="SELECT * FROM intervencion WHERE serial_inter='".$serial_baja[$i]."'";
         
            $intervencion=$obj->update($sql);

            $sql="SELECT nombre,descripcion,fecha_entrega,valor FROM adjudicacion WHERE serial='".$serial_baja[$i]."'";

            $adjudicacion=$obj->insert($sql);

            $adjud=mysqli_fetch_assoc($adjudicacion);

            $sql="SELECT nombre_empleado,cargo_empleado,area FROM empleado WHERE cedula_emplea=".$adjud['nombre']." OR nombre_empleado=".$adjud['nombre']."";
        
            $emple=$obj->consult($sql);
            $empleado1[0]=mysqli_fetch_assoc($emple); 
            
            $sql="SELECT fecha_baja,elaborado_baja,descripcion,valor FROM baja WHERE serial_baja='".$serial_baja[$i]."'";

            $baja1=$obj->insert($sql);
            $baj=mysqli_fetch_assoc($baja1); 

            $sql="SELECT nombre_empleado,cargo_empleado,area FROM empleado WHERE cedula_emplea=".$baj['elaborado_baja']." OR nombre_empleado=".$baj['elaborado_baja']."";

            $emple=$obj->consult($sql);
            $empleado1[1]=mysqli_fetch_assoc($emple); 
               
            $sql="SELECT d.nombre_despa,r.fecha_remi,r.descripcion_remi,e.nombre_estado FROM remision r,estado e, despachado d WHERE d.id_despachado=r.id_despachado and e.id_estado=r.id_estado and serie_remi='".$serial_baja[$i]."'";

            $remicion1=$obj->insert($sql);
        }
    }else{
        for ($i=0; $i < count($activo_baja); $i++) { 
            
            $id_baja=$obj->autoincrement("baja","id_baja");
       
            $sql="INSERT INTO baja VALUES ($id_baja,'".$factura[$i]."','".$nit[$i]."','".$fecha_baja."','".$asunto_baja."','".$equipo_baja[$i]."','".$activo_baja[$i]."','".$serial_baja[$i+1]."','".$descripcion[$i]."','".$valor[$i]."','".$marca[$i]."','".$validado_baja."','".$elaborado_baja."','".$autorizado_baja."','".$contabilizado_baja."',$id_pdf)";
            
            $insertar=$obj->insert($sql);
            
            $sql="SELECT serial_baja,activo_baja,descripcion,valor FROM baja WHERE id_baja=$id_baja";

           
            
            $equipo[$i]=$obj->insert($sql);
            $sql="SELECT id FROM equipos WHERE serial='".$serial_baja[$i+1]."'";
            
            $equi=$obj->insert($sql);
            $equi=mysqli_fetch_assoc($equi);
            $id[$i]=$equi['id'];
            
            $sql="SELECT e.id,e.num_factura,e.serial,e.tipo_equipo,e.activo_fijo,t.desc_tipo_equipo,e.desc_equipo,m.desc_marca,e.caracteristicas,e.accesorios,e.usuario,p.nombre,e.fecha_compra,e.garantia,e.Fecha_fin_garantia,e.valor,es.nombre_estado FROM equipos e,tipo_equipo t,marcas m,proveedor p,estado es,co c WHERE  t.id=e.tipo_equipo AND  m.id=e.id_marca AND p.nit=e.nit AND es.id_estado=e.id_estado AND c.id=e.co AND e.serial='".$serial_baja[$i+1]."'";
           

            $equipo1=$obj->insert($sql);

            $sql="SELECT p.nombre,p.direccion,p.barrio,p.contacto,p.telefono FROM equipos e,proveedor p WHERE  p.nit=e.nit AND e.serial='".$serial_baja[$i+1]."'";

            $proveedor=$obj->insert($sql);

            $sql="SELECT * FROM intervencion WHERE serial_inter='".$serial_baja[$i+1]."'";
         
            $intervencion=$obj->update($sql);

            $sql="SELECT nombre,descripcion,fecha_entrega,valor FROM adjudicacion WHERE serial='".$serial_baja[$i+1]."'";

            $adjudicacion=$obj->insert($sql);

            $adjud=mysqli_fetch_assoc($adjudicacion);

            $sql="SELECT nombre_empleado,cargo_empleado,area FROM empleado WHERE cedula_emplea=".$adjud['nombre']." OR nombre_empleado=".$adjud['nombre']."";
        
            $emple=$obj->consult($sql);
            $empleado1[0]=mysqli_fetch_assoc($emple); 
            
            $sql="SELECT fecha_baja,elaborado_baja,descripcion,valor FROM baja WHERE serial_baja='".$serial_baja[$i+1]."'";

            $baja1=$obj->insert($sql);
            $baj=mysqli_fetch_assoc($baja1); 

            $sql="SELECT nombre_empleado,cargo_empleado,area FROM empleado WHERE cedula_emplea=".$baj['elaborado_baja']." OR nombre_empleado=".$baj['elaborado_baja']."";

            $emple=$obj->consult($sql);
            $empleado1[1]=mysqli_fetch_assoc($emple); 
               
            $sql="SELECT d.nombre_despa,r.fecha_remi,r.descripcion_remi,e.nombre_estado FROM remision r,estado e, despachado d WHERE d.id_despachado=r.id_despachado and e.id_estado=r.id_estado and serie_remi='".$serial_baja[$i+1]."'";

            $remicion1=$obj->insert($sql);
        }
    }
        
        
        
        $sql="SELECT nombre_empleado,cargo_empleado,area FROM empleado WHERE nombre_empleado=(SELECT validado_baja FROM baja WHERE id_baja=$id_baja) OR cedula_emplea=(SELECT validado_baja FROM baja WHERE id_baja=$id_baja)";
        
        $empleado[0]=$obj->insert($sql);
        
        $sql="SELECT nombre_empleado,cargo_empleado,area FROM empleado WHERE nombre_empleado=(SELECT elaborado_baja FROM baja WHERE id_baja=$id_baja) OR cedula_emplea=(SELECT elaborado_baja FROM baja WHERE id_baja=$id_baja)";
        
        $empleado[1]=$obj->insert($sql);
        
        $sql="SELECT nombre_empleado,cargo_empleado,area FROM empleado WHERE nombre_empleado=(SELECT autorizado_baja FROM baja WHERE id_baja=$id_baja) OR cedula_emplea=(SELECT autorizado_baja FROM baja WHERE id_baja=$id_baja)";
        
        $empleado[2]=$obj->insert($sql);
        
        $sql="SELECT nombre_empleado,cargo_empleado,area FROM empleado WHERE nombre_empleado=(SELECT contabilizado_baja FROM baja WHERE id_baja=$id_baja) OR cedula_emplea=(SELECT contabilizado_baja FROM baja WHERE id_baja=$id_baja)";
        
        $empleado[3]=$obj->insert($sql);
        
        if($insertar){
            $sql="SELECT * FROM baja WHERE id_baja=$id_baja";
            $baja=$obj->consult($sql);

            $this->crearPDF($baja,$equipo,$id_baja,$empleado,$id_pdf,$id,$remicion1,$equipo1,$proveedor,$intervencion,$adjudicacion,$empleado1,$baja1);
        }
    }
    
    public function listar(){
        
        $obj=new BajaEquipoModel();
        
        $sql="SELECT * FROM baja";
        
        $bajaEqui=$obj->consult($sql);
        
        include_once '../view/bajaEquipo/listar.php';
    }
    
    
    public function equipo(){
        $obj=new BajaEquipoModel();
        
        if(isset($_POST['seri'])){
            $serial=$_POST['seri'];
            
            $sql="SELECT e.activo_fijo,e.id_marca,e.desc_equipo,e.valor,e.num_factura,p.nombre,d.desc_marca,t.desc_tipo_equipo FROM equipos e,proveedor p,marcas d,tipo_equipo t WHERE d.id=e.id_marca AND e.nit=p.nit AND t.id=e.tipo_equipo AND serial='".$serial."'";
            $resul=$obj->consult($sql);
            
            
            while ($re=mysqli_fetch_assoc($resul)) {
                
                echo "
                <div class='col-md-12 form-group'>	
                <label>Numero de Factura</label>
                <div id='activo'></div>
                
                <input type='text' readonly name='factura[]'  value='".$re['num_factura']."' class='form-control '>
                </div> 
                
                
                <div class='col-md-12 form-group'>	
                
                <label>Tipo Equipo</label>
                <div id='descripcion'></div>
                
                <input type='text'readonly name='equipo_baja[]'  value='".$re['desc_tipo_equipo']."' class='form-control '>
                
                </div>
                
                <div class='col-md-12 form-group'>	
                <label>Activo Fijo</label>
                <div id='activo'></div>
                
                <input type='text' readonly name='activo_baja[]'  value='".$re['activo_fijo']."'  class='form-control '>
                </div>
                
                <div class='col-md-12 form-group'>	
                
                <label>Descripcion</label>
                <div id='descripcion'></div>
                
                <input type='text'readonly name='descripcion[]'  value='".$re['desc_equipo']."'  class='form-control '>
                
                </div>
                <div class='col-md-12 form-group'>	
                
                <label>Proveedor</label>
                <div id='descripcion'></div>
                
                <input type='text'readonly name='nit[]'  value='".$re['nombre']."'  class='form-control '>
                
                </div>
                
                <div class='col-md-12 form-group'>	
                
                <label>Valor</label>
                <div id='descripcion'></div>
                
                <input type='text'readonly name='valor[]'  value='".$re['valor']."' class='form-control '>
                
                </div>
                
                
                <div class='col-md-12 form-group'>	
                <label>Marca</label>
                <div id='marca'></div>
                
                <input type='text' readonly name='marca[]'  value='".$re['desc_marca']."'  class='form-control '>
                </div>";
                
                
            }
            
        }   
    }
    
    
    public function detalle() {
        $obj=new BajaEquipoModel();
        $id_baja=$_GET['id_baja'];
        
        $empleado1=array();
        
        $sql="SELECT nombre_empleado,cargo_empleado,area FROM empleado WHERE nombre_empleado=(SELECT validado_baja FROM baja WHERE id_baja=$id_baja) OR cedula_emplea=(SELECT validado_baja FROM baja WHERE id_baja=$id_baja)";
        
        $empleado1[0]=$obj->insert($sql);
        
        $sql="SELECT nombre_empleado,cargo_empleado,area FROM empleado WHERE nombre_empleado=(SELECT elaborado_baja FROM baja WHERE id_baja=$id_baja) OR cedula_emplea=(SELECT elaborado_baja FROM baja WHERE id_baja=$id_baja)";
        
        $empleado1[1]=$obj->insert($sql);
        
        $sql="SELECT nombre_empleado,cargo_empleado,area FROM empleado WHERE nombre_empleado=(SELECT autorizado_baja FROM baja WHERE id_baja=$id_baja) OR cedula_emplea=(SELECT autorizado_baja FROM baja WHERE id_baja=$id_baja)";
        
        $empleado1[2]=$obj->insert($sql);
        
        $sql="SELECT nombre_empleado,cargo_empleado,area FROM empleado WHERE nombre_empleado=(SELECT contabilizado_baja FROM baja WHERE id_baja=$id_baja) OR cedula_emplea=(SELECT contabilizado_baja FROM baja WHERE id_baja=$id_baja)";
        
        $empleado1[3]=$obj->insert($sql);
        
        
        
        for($i=0;$i<count($empleado1);$i++){
            $emple=$empleado1[$i];
            while ($emp=mysqli_fetch_assoc($emple)) {
                if($i==0){
                    $validado_baja = $emp['nombre_empleado'];
                    $cargo_v= $emp['cargo_empleado'];
                    $area_v= $emp['area'];
                    
                    
                }
                
                if($i==1){
                    $elaborado_baja = $emp['nombre_empleado'];
                    $cargo_e= $emp['cargo_empleado'];
                    $area_e= $emp['area'];
                }
                if($i==2){
                    $autorizado_baja = $emp['nombre_empleado'];
                    $cargo_a= $emp['cargo_empleado'];
                    $area_a= $emp['area'];
                }
                if($i==3){
                    $contabilizado_baja = $emp['nombre_empleado'];
                    $cargo_c= $emp['cargo_empleado'];
                    $area_c= $emp['area'];
                }        
            }
        }
        $sql="SELECT b.id_baja,b.num_factura,b.nit,b.fecha_baja,b.asunto_baja,b.equipo_baja,b.activo_baja,b.serial_baja,b.descripcion,b.valor,b.validado_baja,b.elaborado_baja,b.autorizado_baja,b.contabilizado_baja FROM baja b WHERE id_baja=$id_baja";
        
        $baja=$obj->consult($sql);
        
        $bajaEqui=mysqli_fetch_assoc($baja);
        
        
        $sql="SELECT m.desc_marca,t.desc_tipo_equipo,e.id,e.desc_equipo,e.serial,e.activo_fijo,e.num_intervencion,e.caracteristicas,e.usuario,e.fecha_compra,e.fecha_fin_garantia,es.nombre_estado FROM equipos e,marcas m,tipo_equipo t,estado es WHERE m.id=e.id_marca AND t.id=e.tipo_equipo AND e.id_estado=es.id_estado AND e.id=e.id AND activo_fijo=(SELECT activo_baja FROM baja Where id_baja=$id_baja)";
        
        $equi=$obj->consult($sql);
        $equipo=mysqli_fetch_assoc($equi);
        
        $sql="SELECT nombre_empleado,cargo_empleado,area FROM empleado WHERE cedula_emplea=".$id_baja['nombre']." OR nombre_empleado=".$id_baja['nombre']."";
        
        $emple=$obj->consult($sql);
        $empleado=mysqli_fetch_assoc($emple); 
        
        include_once '../view/bajaEquipo/detalle.php';
    }
    
    public function crearPDF($baja,$equipo,$id_baja,$empleado,$id_pdf,$id,$remicion1,$equipo1,$proveedor,$intervencion,$adjudicacion,$empleado1,$baja1){  
        
        while($info=mysqli_fetch_assoc($baja)){
            
            $dompdf = new Dompdf();
            
            include_once '../controller/dompdf/plantilla/bajaEquipo.php';
            
            $dompdf->loadHtml($html);
            $dompdf->render();
            
            
            
            $ruta="../files/bajaEquipo/".$id_pdf;
            if(!is_dir($ruta)){
                mkdir($ruta,0777,true);
            }
            $titulo  = utf8_decode($id_pdf."bajaEquipo.pdf");//Nombre 
            
            $output = $dompdf->output();
            file_put_contents('../files/bajaEquipo/'.$id_pdf.'/'.$titulo, $output);
            
            $this->crearPDFequipo($id,$remicion1,$equipo1,$proveedor,$intervencion,$adjudicacion,$empleado1,$baja);
     
            
        }

    }

    public function crearPDFequipo($id,$remision,$equipo,$proveedor,$intervencion,$adjudicacion,$empleado,$baja1){

        $dompdf = new Dompdf();
    
        $equi=mysqli_fetch_assoc($equipo);
        $prov=mysqli_fetch_assoc($proveedor);
        if($id){ 
            
            for ($i=0; $i < count($id) ; $i++) { 
                
                $id=$id[$i];
             
                include_once '../controller/dompdf/plantilla/equipo.php';
               
                 $dompdf->loadHtml($html);
                 $dompdf->render();
             
                
                
             
                $ruta="../files/equipo/".$id;
             
                if(!is_dir($ruta)){
                    mkdir($ruta,0777,true);
                }
                $titulo  = utf8_decode($id."equipo.pdf");//Nombre 
                
                $output = $dompdf->output();
                file_put_contents('../files/equipo/'.$id.'/'.$titulo, $output);
            }  
        }
        redirect(getUrl('BajaEquipo','BajaEquipo','listar'));
    }
    
    
    
}
?>
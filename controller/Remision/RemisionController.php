<?php

use function PHPSTORM_META\sql_injection_subst;
include_once '../model/Remision/RemisionModel.php';
require_once '../controller/dompdf1/autoload.inc.php';
use Dompdf\Dompdf;


class RemisionController{
    public function pdf(){
        $obj=new RemisionModel();
        
        $id_remision=$_GET['id_remision'];
        
        $sql="SELECT num_pdf FROM remision WHERE id_remision=$id_remision";
        
        $result=$obj->consult($sql);
        $resul=mysqli_fetch_assoc($result);
        $num_pdf=$resul['num_pdf'];
        
        echo '<div class="modal-header" style="width: 100% ;">
        <h5 class="modal-title" id="exampleModalLabel">Detalle de Remicion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div><object tipe="application/pdf" data="../files/'.  $num_pdf.'/'.$num_pdf.'remision.pdf" " width="100%"     height="700px"></object> <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
        </div>';
        
    }
    
    public function getCreate(){
        
        $obj=new RemisionModel();
        
        $sql="SELECT * FROM despachado ";
        $despachado=$obj->consult($sql);
        
        $sql="SELECT * FROM transportado ";
        $transportado=$obj->consult($sql);
        
        $sql="SELECT * FROM motivo ";
        $motivo=$obj->consult($sql);
        $moti="";
        while ($mo=mysqli_fetch_assoc($motivo)) {
            $moti.="<option value='".$mo['id_motivo']."'>".$mo['nombre_moti']."</option>";
        }
        
        $sql="SELECT * FROM area ";
        $area=$obj->consult($sql);
        
        $sql="SELECT * FROM estado ";
        $estado=$obj->consult($sql);
        $esta="";
        while ($es=mysqli_fetch_assoc($estado)) {
            
            $esta.="<option value='".$es['id_estado']."'>".$es['nombre_estado']."</option>";
        }
        
        $sql="SELECT * FROM departamento ORDER BY dep_nombre ASC ";
        $departamento=$obj->consult($sql);
        
        $sql="SELECT * FROM ciudad ";
        $ciudad=$obj->consult($sql);
        
        include_once '../view/remision/create.php';
    }
    
    public function ciudad(){
        
        $obj=new RemisionModel();
        
        $dep_id=$_POST['id'];
        
        $sql="SELECT * FROM ciudad  WHERE dep_id=$dep_id ORDER BY ciu_nombre ASC";
        $ciudad=$obj->consult($sql);
        
        
        while ($ciu=mysqli_fetch_assoc($ciudad)) {
            echo "<option value='".$ciu['ciu_id']."'>".$ciu['ciu_nombre']."</option>";
        }
        
    }
    
    
    public function postCreate(){
        $obj=new RemisionModel();
        
        
        $numero=$_POST['numero'];
        $fecha=$_POST['Fecha'];
        $hora=$_POST['hora'];
        $temporal=$_POST['temporal'];
        $definitivo=$_POST['definitivo'];
        $fecha_devo=$_POST['fecha_devo'];
        $despachado=$_POST['despachado'];
        $transportado=$_POST['transportado'];
        $motivo=$_POST['motivo'];
        $area=$_POST['area'];
        $empresa=$_POST['empresa'];
        $direccion=$_POST['direccion'];
        $funcionario=$_POST['funcionario'];
        $departamento=$_POST['depto'];
        $ciudad=$_POST['ciudad'];
        $activo=$_POST['activo'];
        $serie=$_POST['serie'];
        $descripcion=$_POST['descripcion'];
        $estado=$_POST['estado'];
        $observacion=$_POST['observacion'];
        $num_pdf=$obj->autoincrement("remision","id_remision");
        
        if($temporal!=NULL){
            $temporal=1;
        }else{
            $temporal=0;
        }
        if($definitivo!=NULL){
            $definitivo=1;
        }else{
            $definitivo=0;
        }
        
        $equipo1=array();
        $id=array();
        $empleado=array();
        for ($i=0; $i < count($activo) ; $i++) { 
            
            $id_remision=$obj->autoincrement("remision","id_remision");
            
            $sql="INSERT INTO remision VALUES ($id_remision,$numero,'".$fecha."','".$hora."','".$temporal."','".$definitivo."','".$fecha_devo."',$despachado,$transportado,$motivo,$area,'".$empresa."','".$direccion."','".$funcionario."',$departamento,$ciudad,'".$activo[$i]."','".$serie[$i]."','".$descripcion[$i]."',$estado,'".$observacion."',$num_pdf)";
            
            $insertar=$obj->insert($sql);
            
            $sql="SELECT r.serie_remi,r.descripcion_remi,r.activo_remi,e.nombre_estado FROM estado e,remision r WHERE r.id_estado=e.id_estado AND r.id_remision=$id_remision";
            
            $equipo1[$i]=$obj->insert($sql);
            
            $sql="SELECT id FROM equipos WHERE serial='".$serie[$i]."'";
            
            $equi=$obj->insert($sql);
            $equi=mysqli_fetch_assoc($equi);
            $id[$i]=$equi['id'];

            $sql="SELECT e.id,e.num_factura,e.serial,e.tipo_equipo,e.activo_fijo,t.desc_tipo_equipo,e.desc_equipo,m.desc_marca,e.caracteristicas,e.accesorios,e.usuario,p.nombre,e.fecha_compra,e.garantia,e.Fecha_fin_garantia,e.valor,es.nombre_estado FROM equipos e,tipo_equipo t,marcas m,proveedor p,estado es,co c WHERE  t.id=e.tipo_equipo AND  m.id=e.id_marca AND p.nit=e.nit AND es.id_estado=e.id_estado AND c.id=e.co AND e.serial='".$serie[$i]."'";

            $equipo=$obj->insert($sql);

            $sql="SELECT p.nombre,p.direccion,p.barrio,p.contacto,p.telefono FROM equipos e,proveedor p WHERE  p.nit=e.nit AND e.serial='".$serie[$i]."'";

            $proveedor=$obj->insert($sql);

            $sql="SELECT * FROM intervencion WHERE serial_inter='".$serie[$i]."'";
         
            $intervencion=$obj->update($sql);

            
            $sql="SELECT d.nombre_despa,r.fecha_remi,r.descripcion_remi,e.nombre_estado FROM remision r,estado e, despachado d WHERE d.id_despachado=r.id_despachado and e.id_estado=r.id_estado and serie_remi='".$serie[$i]."'";
            $remision=$obj->update($sql);

            $remicion1=$obj->insert($sql);

            $sql="SELECT nombre,descripcion,fecha_entrega,valor FROM adjudicacion WHERE serial='".$serie[$i]."'";

            $adjudicacion=$obj->insert($sql);

            $adjud=mysqli_fetch_assoc($adjudicacion);

            $sql="SELECT nombre_empleado,cargo_empleado,area FROM empleado WHERE cedula_emplea=".$adjud['nombre']." OR nombre_empleado=".$adjud['nombre']."";
        
            $emple=$obj->consult($sql);
            $empleado[0]=mysqli_fetch_assoc($emple); 
            
            $sql="SELECT fecha_baja,elaborado_baja,descripcion,valor FROM baja WHERE serial_baja='".$serie[$i]."'";

            $baja=$obj->insert($sql);
            $baj=mysqli_fetch_assoc($baja); 

            $sql="SELECT nombre_empleado,cargo_empleado,area FROM empleado WHERE cedula_emplea=".$baj['elaborado_baja']." OR nombre_empleado=".$baj['elaborado_baja']."";

            $emple=$obj->consult($sql);
            $empleado[1]=mysqli_fetch_assoc($emple); 
            
            
        }
        
        
        if($insertar){
            
            
            $sql="SELECT r.num_remi,r.fecha_remi,r.hora_envio_remi,r.temporal_remi,r.definitivo_remi,r.fecha_devo_remi,r.empresa_remi,r.direccion_remi,r.funcionario_remi,r.activo_remi,r.serie_remi,r.descripcion_remi,r.observacion_remi,d.nombre_despa,t.nombre_transpor,m.nombre_moti,a.nombre_area,de.dep_nombre,c.ciu_nombre,e.nombre_estado FROM remision r,despachado d,transportado t,motivo m,area a,departamento de,ciudad c,estado e WHERE r.id_despachado=d.id_despachado AND r.id_transportado=t.id_transportado AND r.id_motivo=m.id_motivo AND r.id_area=a.id_area AND r.dep_id=de.dep_id AND r.ciu_id=c.ciu_id AND r.id_estado=e.id_estado AND r.id_remision=$id_remision";

          
            
            
            $resultado=$obj->insert($sql);

         
            
            $this->crearPDF($resultado,$id_remision,$equipo1,$num_pdf,$id,$equipo,$proveedor,$intervencion,$remicion1,$adjudicacion, $empleado,$baja);
        }
    }
    
    public function crearPDF($resultado,$id_remision,$equipo1,$num_pdf,$id,$equipo,$proveedor,$intervencion,$remicion1,$adjudicacion, $empleado,$baja){  
        
        if($resultado){
            
            
            $dompdf = new Dompdf();
            
            
            include_once '../controller/dompdf/plantilla/remision.php';
            
            $dompdf->loadHtml($html);
            $dompdf->render();
            
            
            
            $ruta="../files/".$num_pdf;
            if(!is_dir($ruta)){
                mkdir($ruta,0777,true);
            }
            $titulo  = utf8_decode($num_pdf."remision.pdf");//Nombre 
            
            $output = $dompdf->output();
            file_put_contents('../files/'.$num_pdf.'/'.$titulo, $output);
            
        }
        $this->crearPDFequipo($id,$remicion1,$equipo,$proveedor,$intervencion,$adjudicacion,$empleado,$baja);
        
    }
    
    public function crearPDFequipo($id,$remision,$equipo,$proveedor,$intervencion,$adjudicacion,$empleado,$baja){

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
           
            redirect(getUrl('Remision','Remision','listar'));
        }
    }
    
    
    public function listar(){
        
        $obj=new RemisionModel();
        
        $sql="SELECT r.id_remision,r.num_remi,p.nombre_despa,r.descripcion_remi,r.empresa_remi,r.direccion_remi,r.funcionario_remi FROM remision r,despachado p WHERE p.id_despachado=r.id_despachado AND r.id_remision=r.id_remision   ORDER BY r.id_remision ASC ";
        
        $remi=$obj->consult($sql);
        
        include_once '../view/remision/listar.php';
    }
    
    public function filtraremi(){
        $obj=new RemisionModel();
        
        $buscar=$_POST['buscar'];
        
        $sql="SELECT r.num_remi,p.nombre_despa,r.descripcion_remi,r.empresa_remi,r.direccion_remi,r.funcionario_remi FROM remision r,despachado p WHERE p.id_despachado=r.id_despachado AND r.id_remision=r.id_remision AND (r.num_remi LIKE '%".$buscar."%' OR p.nombre_despa LIKE '%".$buscar."%')";
        
        $inter=$obj->consult($sql);
        
        include_once '../view/remision/filtroremi.php';
    }
    
    public function equipo(){
        $obj=new RemisionModel();
        
        $serie=$_POST['seri'];
        
        $sql="SELECT * FROM equipos WHERE serial='".$serie."'";
        $resul=$obj->consult($sql);
        
        
        while ($re=mysqli_fetch_assoc($resul)) {
            
            echo "
            <div class='col-md-12 form-group'>	
            
            <label>Activo Fijo</label>
            <div id='activo'></div>
            
            <input type='text' readonly name='activo[]'  value='".$re['activo_fijo']."' id='fijo' class='form-control '>
            
            </div> 
            
            <div class='col-md-12 form-group'>	
            
            <label>Descripcion</label>
            <div id='descripcion'></div>
            
            <input type='text'readonly name='descripcion[]'  value='".$re['desc_equipo']."' id='descrip' class='form-control '>
            
            </div>
            
            
            ";
            
        }
    }
    
    public function detalle() {
        $obj=new RemisionModel();
        $id_remision=$_GET['id_remision'];
        
        
        $sql="SELECT * FROM remision WHERE id_remision=$id_remision";
        
        $remi=$obj->consult($sql);
        $remision=mysqli_fetch_assoc($remi);
        
        $sql="SELECT m.desc_marca,t.desc_tipo_equipo,e.id,e.desc_equipo,e.serial,e.activo_fijo,e.num_intervencion,e.caracteristicas,e.usuario,e.fecha_compra,e.fecha_fin_garantia,es.nombre_estado FROM equipos e,marcas m,tipo_equipo t,estado es WHERE m.id=e.id_marca AND t.id=e.tipo_equipo AND e.id_estado=es.id_estado AND e.id=e.id AND activo_fijo=(SELECT activo_remi FROM remision Where id_remision=$id_remision)";
        
        $equipo=$obj->consult($sql);
        $equi=mysqli_fetch_assoc($equipo);
        
        include_once '../view/remision/detalle.php';
    }
}
?>

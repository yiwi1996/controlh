<?php

use function PHPSTORM_META\sql_injection_subst;
include_once '../model/Adjudicacion/AdjudicacionModel.php';
require_once '../controller/dompdf1/autoload.inc.php';
use Dompdf\Dompdf;

class AdjudicacionController{
    
    public function pdf(){
        $obj=new AdjudicacionModel();
        $id_adjudicacion=$_GET['id_adjudicacion'];
        $sql="SELECT num_pdf FROM adjudicacion WHERE id_adjudicacion=$id_adjudicacion";
        $result=$obj->consult($sql);
        $resul=mysqli_fetch_assoc($result);
        $num_pdf=$resul['num_pdf'];
        
        
        
        echo '<div class="modal-header" style="width: 100% ;">
        <h5 class="modal-title" id="exampleModalLabel">Detalle de Adjudicacion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div><object tipe="application/pdf" data="../files/adjudicacion/'.$num_pdf.'/'.$num_pdf.'adjudicacion.pdf" " width="100%"     height="700px"></object> <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
        </div>';
        
    }
    
    public function getCreate(){  
        
        include_once '../view/adjudicacion/create.php';
    }
    
    
    public function postCreate(){
        $obj=new AdjudicacionModel();
        
        $factura=$_POST['factura'];
        $nit=$_POST['nit'];
        $fecha_entrega=$_POST['fecha_entrega'];
        $activo=$_POST['activo'];
        $serial=$_POST['serial'];
        $nombre=$_POST['nombre'];
        $observaciones=$_POST['observaciones'];
        $descripcion=$_POST['descripcion'];
        $valor=$_POST['valor'];
        $recibido=$_POST['recibido'];
        $entregado=$_POST['entregado'];
        $copia=$_POST['copia'];
        $contabilizado=$_POST['contabilizado'];
        $num_pdf=$obj->autoincrement("adjudicacion","id_adjudicacion");
        
        $resul = array();
        $serial1= array();
        $activo_fijo1= array();
        $descripcion1= array();
        $valor1= array();
        $empleado=array();
        $empleado1=array();
        
        $n=0;
        for ($i=0; $i <= count($factura)-1; $i++) { 
            
            $id_adjudicacion=$obj->autoincrement("adjudicacion","id_adjudicacion");
            
            $sql="INSERT INTO adjudicacion VALUES ($id_adjudicacion,'".$factura[$i]."','".$nit[$i]."','".$fecha_entrega[0]."',$activo[$i],'".$serial[$i]."','".$nombre[0]."','".$observaciones[$i]."','".$descripcion[$i]."',$valor[$i],'".$recibido[0]."','".$entregado[0]."','".$copia[0]."','".$contabilizado[0]."',$num_pdf)";
            
            
            
            $insertar[$i]=$obj->insert($sql);
            
            if($insertar){
                $sql="SELECT ad.id_adjudicacion,ad.num_factura,ad.nit,ad.fecha_entrega,ad.activo_fijo,ad.serial,ad.nombre,ad.observaciones,ad.descripcion,ad.valor,ad.recibido,ad.entregado,ad.copia,ad.contabilizado FROM adjudicacion ad WHERE ad.id_adjudicacion=$id_adjudicacion";
                
                $resul[$i]=$obj->insert($sql);
                
                $sql="SELECT descripcion,valor,activo_fijo,serial FROM adjudicacion WHERE id_adjudicacion=$id_adjudicacion";
                
                $r=$obj->insert($sql);
                
                while($info=mysqli_fetch_assoc($r)){
                    $descripcion1[$i]=$info['descripcion'];
                    $valor1[$i]=$info['valor'];
                    $activo_fijo1[$i]=$info['activo_fijo'];
                    $serial1[$i]=$info['serial'];
                }
                
                
                $n++;
            }
            
        }
        $sql="SELECT nombre_empleado,cargo_empleado,area FROM empleado WHERE nombre_empleado=(SELECT nombre FROM adjudicacion WHERE id_adjudicacion=$id_adjudicacion) OR cedula_emplea=(SELECT nombre FROM adjudicacion WHERE id_adjudicacion=$id_adjudicacion)";
        
        $empleado[0]=$obj->insert($sql);
        
        $sql="SELECT nombre_empleado,cargo_empleado,area FROM empleado WHERE nombre_empleado=(SELECT entregado FROM adjudicacion WHERE id_adjudicacion=$id_adjudicacion) OR cedula_emplea=(SELECT entregado FROM adjudicacion WHERE id_adjudicacion=$id_adjudicacion)";
        
        $empleado[1]=$obj->insert($sql);
        
        $sql="SELECT nombre_empleado,cargo_empleado,area FROM empleado WHERE nombre_empleado=(SELECT copia FROM adjudicacion WHERE id_adjudicacion=$id_adjudicacion) OR cedula_emplea=(SELECT copia FROM adjudicacion WHERE id_adjudicacion=$id_adjudicacion)";
        
        $empleado[2]=$obj->insert($sql);
        
        $sql="SELECT nombre_empleado,cargo_empleado,area FROM empleado WHERE nombre_empleado=(SELECT contabilizado FROM adjudicacion WHERE id_adjudicacion=$id_adjudicacion) OR cedula_emplea=(SELECT contabilizado FROM adjudicacion WHERE id_adjudicacion=$id_adjudicacion)";
        
        $empleado[3]=$obj->insert($sql);
        
        
        $this->crearPDF($resul,$id_adjudicacion,$n,$descripcion1,$valor1, $activo_fijo1, $serial1,$empleado,$num_pdf);
        
        
        
    }
    
    public function crearPDF($resul,$id_adjudicacion,$n,$descripcion1,$valor1, $activo_fijo1, $serial1,$empleado,$num_pdf){  
        $obj=new AdjudicacionModel();
        
        
        for($i=0; $i<$n;$i++){
            $result=$resul[$i];
            
            while($info=mysqli_fetch_assoc($result)){
                
                $dompdf = new Dompdf();
                
                include_once '../controller/dompdf/plantilla/adjudicacion.php';
                
                $dompdf->loadHtml($html);
                $dompdf->render();
                
                
                
                $ruta="../files/adjudicacion/".$num_pdf;
                if(!is_dir($ruta)){
                    mkdir($ruta,0777,true);
                }
                $titulo  = utf8_decode($num_pdf."adjudicacion.pdf");//Nombre 
                
                $output = $dompdf->output();
                file_put_contents('../files/adjudicacion/'.$num_pdf.'/'.$titulo, $output);
                
                
            }
            
        }
        redirect(getUrl('Adjudicacion','Adjudicacion','listar'));
    }

    
    public function listar(){
        
        $obj=new AdjudicacionModel();
        
        $sql="SELECT id_adjudicacion,num_factura,activo_fijo,serial,descripcion FROM adjudicacion WHERE id_adjudicacion=id_adjudicacion";
        
        $adjudicacion=$obj->consult($sql);
        
        include_once '../view/adjudicacion/listar.php';
    }
    
    public function equipo(){
        $obj=new AdjudicacionModel();
        
        if(isset($_POST['seri'])){
            $serial=$_POST['seri'];
            
            $sql="SELECT e.activo_fijo,e.desc_equipo,e.valor,e.num_factura,p.nombre FROM equipos e,proveedor p WHERE e.nit=p.nit AND serial='".$serial."'";
            $resul=$obj->consult($sql);
            
            
            while ($re=mysqli_fetch_assoc($resul)) {
                
                echo "
                
                <div class='col-md-12 form-group'>	
                <label>Numero de Factura</label>
                <div id='activo'></div>
                
                <input type='text' readonly name='factura[]'  value='".$re['num_factura']."' class='form-control '>
                </div> 
                
                <div class='col-md-12 form-group'>	
                <label>Activo Fijo</label>
                <div id='activo'></div>
                
                <input type='text' readonly name='activo[]'  value='".$re['activo_fijo']."'  class='form-control '>
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
                
                
                
                
                ";
            }
        }else if(isset($_POST['nom'])){
            $nombre=$_POST['nom'];
            
            $sql="SELECT cedula_emplea,nombre_empleado,cargo_empleado,area FROM empleado WHERE nombre_empleado='".$nombre."' OR cedula_emplea='".$nombre."'";
            
            
            
            $empleado=$obj->consult($sql);
            while ($emple=mysqli_fetch_assoc($empleado)) {
                
                if($emple['cedula_emplea']==$nombre){
                    echo"Nombre: ".$emple['nombre_empleado']."<br>
                    Cargo: ".$emple['cargo_empleado']."<br>
                    Area: ".$emple['area']."";
                }else{
                    echo"Cargo: ".$emple['cargo_empleado']."<br>
                    Area: ".$emple['area']."";
                }
            }
        }   
    }
    
    public function detalle() {
        $obj=new AdjudicacionModel();
        $id_adjudicacion=$_GET['id_adjudicacion'];
        
        
        $sql="SELECT ad.id_adjudicacion,ad.num_factura,ad.nit,ad.fecha_entrega,ad.activo_fijo,ad.serial,ad.nombre,ad.observaciones,ad.descripcion,ad.valor,ad.recibido,ad.entregado,ad.copia,ad.contabilizado FROM adjudicacion ad WHERE id_adjudicacion=$id_adjudicacion";
        
        $adjudi=$obj->consult($sql);
        
        $adjudicacion=mysqli_fetch_assoc($adjudi);
        
        
        $sql="SELECT m.desc_marca,t.desc_tipo_equipo,e.id,e.desc_equipo,e.serial,e.activo_fijo,e.num_intervencion,e.caracteristicas,e.usuario,e.fecha_compra,e.fecha_fin_garantia,es.nombre_estado FROM equipos e,marcas m,tipo_equipo t,estado es WHERE m.id=e.id_marca AND t.id=e.tipo_equipo AND e.id_estado=es.id_estado AND e.id=e.id AND activo_fijo=(SELECT activo_fijo FROM adjudicacion Where id_adjudicacion=$id_adjudicacion)";
        
        $equi=$obj->consult($sql);
        $equipo=mysqli_fetch_assoc($equi);
        
        $sql="SELECT nombre_empleado,cargo_empleado,area FROM empleado WHERE cedula_emplea=".$adjudicacion['nombre']." OR nombre_empleado=".$adjudicacion['nombre']."";
        
        $emple=$obj->consult($sql);
        $empleado=mysqli_fetch_assoc($emple); 
        
        $sql="SELECT nombre_empleado,cargo_empleado,area FROM empleado WHERE cedula_emplea=".$adjudicacion['recibido']." OR nombre_empleado=".$adjudicacion['recibido']."";
        
        $emple1=$obj->consult($sql);
        $empleado1=mysqli_fetch_assoc($emple1); 
        
        $sql="SELECT nombre_empleado,cargo_empleado,area FROM empleado WHERE cedula_emplea=".$adjudicacion['entregado']." OR nombre_empleado=".$adjudicacion['entregado']."";
        
        $emple2=$obj->consult($sql);
        $empleado2=mysqli_fetch_assoc($emple2); 
        
        $sql="SELECT nombre_empleado,cargo_empleado,area FROM empleado WHERE cedula_emplea=".$adjudicacion['copia']." OR nombre_empleado=".$adjudicacion['copia']."";
        
        $emple3=$obj->consult($sql);
        $empleado3=mysqli_fetch_assoc($emple3); 
        
        $sql="SELECT nombre_empleado,cargo_empleado,area FROM empleado WHERE cedula_emplea=".$adjudicacion['contabilizado']." OR nombre_empleado=".$adjudicacion['contabilizado']."";
        
        $emple4=$obj->consult($sql);
        $empleado4=mysqli_fetch_assoc($emple4); 
        
        include_once '../view/adjudicacion/detalle.php';
    }
    
    
}
?> 

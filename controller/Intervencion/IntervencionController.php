<?php

use function PHPSTORM_META\sql_injection_subst;

include_once '../model/Intervencion/IntervencionModel.php';
require_once '../controller/dompdf1/autoload.inc.php';
use Dompdf\Dompdf;

class IntervencionController{
    public function getCreate(){
        $obj=new IntervencionModel();
        
        
        include_once '../view/intervencion/create.php';
    }
    
    public function postCreate(){
        $obj=new IntervencionModel();
        
        $id_intervencion=$obj->autoincrement("intervencion","id_intervencion");
        $fecha=$_POST['fecha'];
        $activo=$_POST['activo'];
        $serial=$_POST['serial'];
        $descripcion=$_POST['descripcion'];
        $pre=$_POST['pre'];
        $corr=$_POST['corr'];
        $detalle=$_POST['detalle'];
        $realizado=$_POST['realizado'];
        $valor=$_POST['valor'];
        
        $sql="SELECT num_intervencion FROM equipos WHERE serial='".$serial."'";
        
        $resul=$obj->consult($sql);
        $resu=mysqli_fetch_assoc($resul);
        $num_intervencion=$resu['num_intervencion'];
        $num_intervencion=$num_intervencion+1;
        
       
        if($pre!=NULL){
            $pre=1;
        }else{
            $pre=0;
        }
        if($corr!=NULL){
            $corr=1;
        }else{
            $corr=0;
        }
        
        $sql="INSERT INTO intervencion VALUES ($id_intervencion,$activo,'".$serial."','".$descripcion."','".$fecha."','".$pre."','".$corr."','".$detalle."','".$realizado."',$valor)";
        
        $insertar=$obj->insert($sql);
        if($insertar){

            $sql="UPDATE equipos SET num_intervencion=$num_intervencion WHERE serial='".$serial."'";

            $insertar=$obj->update($sql);

            redirect(getUrl('Intervencion','Intervencion','listar'));
        }
    }
    public function crearPDF($id,$equipo){  
        
        $dompdf = new Dompdf();

        $equi=mysqli_fetch_assoc($equipo);
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
        
        redirect(getUrl('Equipo','Equipo','listar'));
    }
    
    public function listar(){
        
        $obj=new IntervencionModel();
        
        $sql="SELECT *  FROM intervencion";      
        
        $inter=$obj->consult($sql);
        
        include_once '../view/intervencion/listar.php';
    }
    
    public function filtrarinter(){
        $obj=new IntervencionModel();
        
        $buscar=$_POST['buscar'];
        
        
        $sql="SELECT *  FROM intervencion i WHERE (i.realizado_inter LIKE '%".$buscar."%' OR i.fecha_inter LIKE '%".$buscar."%')";
        
        $inter=$obj->consult($sql);
        
        include_once '../view/intervencion/filtroInter.php';
    }
    
    
    public function equipo(){
        $obj=new IntervencionModel();
        
        $serie=$_POST['seri'];
        
        $sql="SELECT * FROM equipos WHERE serial='".$serie."'";
        $resul=$obj->consult($sql);
        
        
        while ($in=mysqli_fetch_assoc($resul)) {
            
            echo "
            <div class='col-md-12 form-group'>	
            
            <label>Activo Fijo</label>
            <div id='activo'></div>
            
            <input type='text' readonly name='activo'  value='".$in['activo_fijo']."' id='fijo' class='form-control '>
            
            </div> 
            
            <div class='col-md-12 form-group'>	
            
            <label>Descripcion</label>
            <div id='descripcion'></div>
            
            <input type='text'readonly name='descripcion'  value='".$in['desc_equipo']."' id='descrip' class='form-control '>
            
            </div>
            
            
            ";
            
        }
    }
    public function detalle() {
        $obj=new IntervencionModel();
        $id_intervencion=$_GET['id_intervencion'];

        $sql="SELECT * FROM intervencion Where id_intervencion= $id_intervencion";

        $inter=$obj->consult($sql);
        $intervencion=mysqli_fetch_assoc($inter);

        $sql="SELECT m.desc_marca,t.desc_tipo_equipo,e.id,e.desc_equipo,e.serial,e.activo_fijo,e.num_intervencion,e.caracteristicas,e.usuario,e.fecha_compra,e.fecha_fin_garantia,es.nombre_estado FROM equipos e,marcas m,tipo_equipo t,estado es WHERE m.id=e.id_marca AND t.id=e.tipo_equipo AND e.id_estado=es.id_estado AND e.id=e.id AND e.activo_fijo=(SELECT activo_inter FROM intervencion Where id_intervencion= $id_intervencion)";
        
        
        $equipo=$obj->consult($sql);
        $equi=mysqli_fetch_assoc($equipo);

        include_once '../view/intervencion/detalle.php';
    }

    
   
}
?>
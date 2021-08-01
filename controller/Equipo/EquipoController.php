<?php

use function PHPSTORM_META\sql_injection_subst;

include_once '../model/Equipo/EquipoModel.php';
require_once '../controller/dompdf1/autoload.inc.php';
use Dompdf\Dompdf;

class EquipoController{
    public function getCreate(){
        $obj=new EquipoModel();
        
        $sql="SELECT * FROM marcas";
        $marca=$obj->consult($sql);
        
        $sql="SELECT * FROM proveedor";
        $Nit=$obj->consult($sql);
        
        $sql="SELECT * FROM co";
        $centro=$obj->consult($sql);
        
        $sql="SELECT * FROM tipo_equipo";
        $tipo=$obj->consult($sql);
        
        $sql="SELECT * FROM sistema_operativo";
        $sistema=$obj->consult($sql);
        
        $sql="SELECT * FROM estado";
        $estado=$obj->consult($sql);
        
        $sql="SELECT * FROM office";
        $office=$obj->consult($sql);
        
        $sql="SELECT * FROM antivirus";
        $antivirus=$obj->consult($sql);
        
        include_once '../view/equipo/create.php';
    }
    
    public function postCreate(){
        $obj=new EquipoModel();
        
        $id=$obj->autoincrement("equipos","id");
        $Serial=$_POST['Serial'];
        $ActivoFijo=$_POST['ActivoFijo'];
        $TipoEquipo=$_POST['TipoEquipo'];
        $DescripcionEquipo=$_POST['DescripcionEquipo'];
        $Marca=$_POST['Marca'];
        $CaracteristicasGenerales=$_POST['CaracteristicasGenerales'];
        $Accesorios=$_POST['Accesorios'];
        $Usuario=$_POST['Usuario'];
        $Nit=$_POST['Nit'];
        $FechaCompra=$_POST['Fecha_de_Compra'];
        $Garantia=$_POST['Garantia'];
        $Valor=$_POST['Valor'];
        $SistemaOperativo=$_POST['SistemaOperativo'];
        $office_lince=$_POST['office_lince'];
        $licencia_sistema=$_POST['licencia_sistema'];
        $antivirus_lince=$_POST['antivirus_lince'];
        $Estado=$_POST['Estado'];
        $CentroOperacion=$_POST['CentroOperacion'];
        $antivirus=$_POST['antivirus'];
        $office=$_POST['office'];
        $soat=$_POST['soat'];
        $fecha_venci_soat=$_POST['fecha_venci_soat'];
        $tecnomecanica=$_POST['tecnomecanica'];
        $fecha_venci_tecnomeca=$_POST['fecha_venci_tecnomeca'];
        $numero_nii=$_POST['numero_nii'];
        $fecha_verificacion=$_POST['fecha_verificacion'];
        $cod_oavm=$_POST['cod_oavm'];
        $num_factura=$_POST['num_factura'];
        
        
        
        
        $sql = "SELECT DATE_ADD('".$FechaCompra."', INTERVAL $Garantia MONTH)";
        $fin_garantia = $obj->consult($sql);
        $fin_garantia= mysqli_fetch_array($fin_garantia);
        
        if($SistemaOperativo==4 && ($TipoEquipo==2 || $TipoEquipo==5)){
            $sql="INSERT INTO equipos VALUES ($id,'".$Serial."',0,$ActivoFijo,$TipoEquipo,'".$DescripcionEquipo."',$Marca,'".$CaracteristicasGenerales."','".$Accesorios."','".$Usuario."','".$Nit."','".$FechaCompra."','".$Garantia."','".$fin_garantia[0]."',$Valor,$SistemaOperativo,null,null,null,$Estado,'".$CentroOperacion."',null,null,null,null,null,null,null,null,null,'".$num_factura."')";
            
        }else{
            $sql="INSERT INTO equipos VALUES ($id,'".$Serial."',0,$ActivoFijo,$TipoEquipo,'".$DescripcionEquipo."',$Marca,'".$CaracteristicasGenerales."','".$Accesorios."','".$Usuario."','".$Nit."','".$FechaCompra."','".$Garantia."','".$fin_garantia[0]."',$Valor,$SistemaOperativo,'".$office_lince."','".$licencia_sistema."','".$antivirus_lince."',$Estado,'".$CentroOperacion."',$antivirus,$office,null,null,null,null,null,null,null,'".$num_factura."')";
        }
        if($TipoEquipo==3 || $TipoEquipo==4){
            $sql="INSERT INTO equipos VALUES ($id,'".$Serial."',0,$ActivoFijo,$TipoEquipo,'".$DescripcionEquipo."',$Marca,'".$CaracteristicasGenerales."','".$Accesorios."','".$Usuario."','".$Nit."','".$FechaCompra."','".$Garantia."','".$fin_garantia[0]."',$Valor,null,null,null,null,$Estado,'".$CentroOperacion."',null,null,null,null,null,null,null,null,null,'".$num_factura."')";
        }
        if($TipoEquipo==1){
            $sql="INSERT INTO equipos VALUES ($id,'".$Serial."',0,$ActivoFijo,$TipoEquipo,'".$DescripcionEquipo."',$Marca,'".$CaracteristicasGenerales."','".$Accesorios."','".$Usuario."','".$Nit."','".$FechaCompra."','".$Garantia."','".$fin_garantia[0]."',$Valor,null,null,null,null,$Estado,'".$CentroOperacion."',null,null,null,null,null,null,'".$numero_nii."','".$fecha_verificacion."','".$cod_oavm."','".$num_factura."')";
        }
        if($TipoEquipo==6){
            $fecha_venci_tecnomeca=$_POST['fecha_venci_tecnomeca'];
            $sql="INSERT INTO equipos VALUES ($id,'".$Serial."',0,$ActivoFijo,$TipoEquipo,'".$DescripcionEquipo."',$Marca,'".$CaracteristicasGenerales."','".$Accesorios."','".$Usuario."','".$Nit."','".$FechaCompra."','".$Garantia."','".$fin_garantia[0]."',$Valor,null,null,null,null,$Estado,'".$CentroOperacion."',null,null,'".$soat."','".$fecha_venci_soat."','".$tecnomecanica."','".$fecha_venci_tecnomeca."',null,null,null,'".$num_factura."')";  
        }
        
        
        
        

        
        $insertar=$obj->insert($sql);
        if($insertar){
            
            $sql="SELECT e.id,e.num_factura,e.serial,e.tipo_equipo,e.activo_fijo,t.desc_tipo_equipo,e.desc_equipo,m.desc_marca,e.caracteristicas,e.accesorios,e.usuario,p.nombre,e.fecha_compra,e.garantia,e.Fecha_fin_garantia,e.valor,es.nombre_estado FROM equipos e,tipo_equipo t,marcas m,proveedor p,estado es,co c WHERE  t.id=e.tipo_equipo AND  m.id=e.id_marca AND p.nit=e.nit AND es.id_estado=e.id_estado AND c.id=e.co AND e.id=$id";

            $equipo=$obj->insert($sql);

            $sql="SELECT p.nombre,p.direccion,p.barrio,p.contacto,p.telefono FROM equipos e,proveedor p WHERE  p.nit=e.nit AND e.id=$id";

            $proveedor=$obj->insert($sql);

            redirect(getUrl('Equipo','Equipo','listar'));
        }
    }
    
    public function listar(){
        
        $obj=new EquipoModel();
        
        $sql="SELECT e.id,t.desc_tipo_equipo,e.serial,e.activo_fijo,e.caracteristicas,e.usuario,es.id_estado,es.nombre_estado FROM equipos e,tipo_equipo t, estado es WHERE es.id_estado=e.id_estado AND t.id=e.tipo_equipo AND e.id=e.id ORDER BY id ASC";
        
        
        
        $equipo=$obj->consult($sql);
        
        include_once '../view/equipo/listar.php';
    }
    
    public function filtrarequipo(){
        $obj=new EquipoModel();
        
        $buscar=$_POST['buscar'];
        
        $sql="SELECT m.desc_marca,t.desc_tipo_equipo,e.serial,e.activo_fijo,e.caracteristicas,e.usuario,e.fecha_compra,e.fecha_fin_garantia,es.nombre_estado FROM equipos e,marcas m,tipo_equipo t,estado es WHERE m.id=e.id_marca AND t.id=e.tipo_equipo AND e.id_estado=es.id_estado AND e.id=e.id AND (t.desc_tipo_equipo LIKE '%".$buscar."%' OR e.usuario LIKE '%".$buscar."%')";
        
        
        $equipo=$obj->consult($sql);
        
        include_once '../view/equipo/filtroEquipo.php';
    }
    
    public function Eliminar(){
        $obj=new EquipoModel();
        $id=$_GET['id'];
        $accion=$_GET['accion'];

        if($accion==0){
            $sql="UPDATE equipos SET id_estado = 2 WHERE id = $id";
        }else{
            $sql="UPDATE equipos SET id_estado = 1 WHERE id = $id";
        }
     echo($sql);
        $eliminar=$obj->consult($sql);
        
       
    }
    
    public function detalle() {
        $obj=new EquipoModel();
        $id=$_GET['id'];
        
        
        $sql="SELECT * FROM equipos WHERE id=$id";
        $equi=$obj->consult($sql);
        $equipo1=mysqli_fetch_assoc($equi);
        
        if($equipo1['id_sis_operativo']==4){
            
            $sql="SELECT e.id,e.num_factura,e.serial,e.tipo_equipo,e.activo_fijo,t.desc_tipo_equipo,e.desc_equipo,m.desc_marca,e.caracteristicas,e.accesorios,e.usuario,p.nombre,e.fecha_compra,e.garantia,e.Fecha_fin_garantia,e.valor,s.id_sis_operativo,s.desc_operativo,es.nombre_estado,c.desc_co FROM equipos e,tipo_equipo t,sistema_operativo s,marcas m,proveedor p,estado es,co c WHERE  t.id=e.tipo_equipo AND s.id_sis_operativo=e.id_sis_operativo AND m.id=e.id_marca AND p.nit=e.nit AND es.id_estado=e.id_estado AND c.id=e.co AND e.id=$id";
            
        }else{
            $sql="SELECT e.id,e.num_factura,e.serial,e.tipo_equipo,e.activo_fijo,t.desc_tipo_equipo,e.desc_equipo,m.desc_marca,e.caracteristicas,e.accesorios,e.usuario,p.nombre,e.fecha_compra,e.garantia,e.Fecha_fin_garantia,e.valor,s.id_sis_operativo,s.desc_operativo,e.licen_office,e.licen_operativo,e.licen_antivirus,es.nombre_estado,c.desc_co,a.desc_antivirus,o.desc_office FROM equipos e,tipo_equipo t,sistema_operativo s,marcas m,proveedor p,estado es,co c,antivirus a,office o WHERE  t.id=e.tipo_equipo AND s.id_sis_operativo=e.id_sis_operativo AND m.id=e.id_marca AND p.nit=e.nit AND es.id_estado=e.id_estado AND c.id=e.co AND a.id_antivirus=e.id_antivirus AND o.id_office=e.id_office AND e.id=$id";
            
        }
        if($equipo1['tipo_equipo']==1){
            $sql="SELECT e.id,e.num_factura,e.serial,e.activo_fijo,e.tipo_equipo,t.desc_tipo_equipo,e.desc_equipo,m.desc_marca,e.caracteristicas,e.accesorios,e.usuario,p.nombre,e.fecha_compra,e.garantia,e.Fecha_fin_garantia,e.valor,es.nombre_estado,c.desc_co,e.numero_nii,e.fecha_verificacion,e.cod_oavm FROM equipos e,tipo_equipo t,marcas m,proveedor p,estado es,co c WHERE  t.id=e.tipo_equipo AND  m.id=e.id_marca AND p.nit=e.nit AND es.id_estado=e.id_estado AND c.id=e.co AND e.id=$id";
            
            
        }else if($equipo1['tipo_equipo']==3 || $equipo1['tipo_equipo']==4){
            $sql="SELECT e.id,e.num_factura,e.serial,e.activo_fijo,e.tipo_equipo,t.desc_tipo_equipo,e.desc_equipo,m.desc_marca,e.caracteristicas,e.accesorios,e.usuario,p.nombre,e.fecha_compra,e.garantia,e.Fecha_fin_garantia,e.valor,es.nombre_estado,c.desc_co FROM equipos e,tipo_equipo t,marcas m,proveedor p,estado es,co c WHERE  t.id=e.tipo_equipo AND  m.id=e.id_marca AND p.nit=e.nit AND es.id_estado=e.id_estado AND c.id=e.co AND e.id=$id";
            
            
        }else if($equipo1['tipo_equipo']==6){
            $sql="SELECT e.id,e.num_factura,e.serial,e.tipo_equipo,e.activo_fijo,t.desc_tipo_equipo,e.desc_equipo,m.desc_marca,e.caracteristicas,e.accesorios,e.usuario,p.nombre,e.fecha_compra,e.garantia,e.Fecha_fin_garantia,e.valor,es.nombre_estado,c.desc_co,e.numero_soat,e.fecha_vencimiento_soat,e.numero_tecnomecanica,e.fecha_vencimiento_tecnomecanica FROM equipos e,tipo_equipo t,marcas m,proveedor p,estado es,co c WHERE  t.id=e.tipo_equipo AND  m.id=e.id_marca AND p.nit=e.nit AND es.id_estado=e.id_estado AND c.id=e.co AND e.id=$id";
        }
        
        
        
        $equi=$obj->consult($sql);
        $equipo=mysqli_fetch_assoc($equi);
        
        $sql="SELECT * FROM intervencion WHERE serial_inter=(SELECT serial FROM equipos WHERE id=$id)";
        $corr=0;
        $pre=0;
        $inter=$obj->consult($sql);
        
        while($interven=mysqli_fetch_assoc($inter)){
            
            if($interven['corr_inter']==1){
                $corr++;
            }
            
            if($interven['pre_inter']==1){
                $pre++;
            }
        }
        
        include_once '../view/equipo/detalle.php';
    }
    
    public function valida(){
        $obj=new EquipoModel();
        
        $serial=$_POST['seri'];
        
        $sql="SELECT serial FROM equipos WHERE serial='".$serial."'";
        
        $resul=$obj->consult($sql);
        
        $resultado=mysqli_fetch_assoc($resul);
        echo $resultado['serial'];
        
        
    }
    
    public function crearPDF($id,$remision,$equipo,$proveedor,$intervencion,$adjudicacion,$empleado,$baja){  
        
        $dompdf = new Dompdf();

        $equi=mysqli_fetch_assoc($equipo);
        $prov=mysqli_fetch_assoc($proveedor);
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

        echo '<div class="modal-header" style="width: 100% ;">
        <h5 class="modal-title" id="exampleModalLabel">Detalle de Equipo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
         </div><object tipe="application/pdf" data="../files/equipo/'.$id.'/'.$id.'equipo.pdf" " width="100%"     height="700px"></object> <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
        </div>';
        
        
    }

    public function pdf(){
        $obj=new EquipoModel();
        $id=$_GET['id'];
        $serial=$_GET['serial'];

        $sql="SELECT e.id,e.num_factura,e.serial,e.tipo_equipo,e.activo_fijo,t.desc_tipo_equipo,e.desc_equipo,m.desc_marca,e.caracteristicas,e.accesorios,e.usuario,p.nombre,e.fecha_compra,e.garantia,e.Fecha_fin_garantia,e.valor,es.nombre_estado FROM equipos e,tipo_equipo t,marcas m,proveedor p,estado es,co c WHERE  t.id=e.tipo_equipo AND  m.id=e.id_marca AND p.nit=e.nit AND es.id_estado=e.id_estado AND c.id=e.co AND e.serial='$serial'";

        $equipo=$obj->insert($sql);

        $sql="SELECT p.nombre,p.direccion,p.barrio,p.contacto,p.telefono FROM equipos e,proveedor p WHERE  p.nit=e.nit AND e.serial='$serial'";

        $proveedor=$obj->insert($sql);

        $sql="SELECT * FROM intervencion WHERE serial_inter='$serial'";
     
        $intervencion=$obj->update($sql);

        $sql="SELECT nombre,descripcion,fecha_entrega,valor FROM adjudicacion WHERE serial='$serial'";

        $adjudicacion=$obj->insert($sql);

        $adjud=mysqli_fetch_assoc($adjudicacion);

        $sql="SELECT nombre_empleado,cargo_empleado,area FROM empleado WHERE cedula_emplea=".$adjud['nombre']." OR nombre_empleado=".$adjud['nombre']."";
    
        $emple=$obj->consult($sql);
        $empleado[0]=mysqli_fetch_assoc($emple); 
        
        $sql="SELECT fecha_baja,elaborado_baja,descripcion,valor FROM baja WHERE serial_baja='$serial'";

        $baja=$obj->insert($sql);
        $baj=mysqli_fetch_assoc($baja); 

        $sql="SELECT nombre_empleado,cargo_empleado,area FROM empleado WHERE cedula_emplea=".$baj['elaborado_baja']." OR nombre_empleado=".$baj['elaborado_baja']."";

        $emple=$obj->consult($sql);
        $empleado[1]=mysqli_fetch_assoc($emple); 
           
        $sql="SELECT d.nombre_despa,r.fecha_remi,r.descripcion_remi,e.nombre_estado FROM remision r,estado e, despachado d WHERE d.id_despachado=r.id_despachado and e.id_estado=r.id_estado and serie_remi='$serial'";

        $remision=$obj->insert($sql);

        $this->crearPDF($id,$remision,$equipo,$proveedor,$intervencion,$adjudicacion,$empleado,$baja);
            
    }
    
}
?>
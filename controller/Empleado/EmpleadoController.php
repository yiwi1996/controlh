<?php

use function PHPSTORM_META\sql_injection_subst;

include_once '../model/Empleado/EmpleadoModel.php';

class EmpleadoController{
    public function getCreate(){
        $obj=new EmpleadoModel();
        
        
        include_once '../view/empleado/create.php';
    }
    
    public function postCreate(){
        $obj=new EmpleadoModel();
        
        $id_empleado=$obj->autoincrement("empleado","id_empleado");
        $cedula=$_POST['cedula'];
        $nombre=$_POST['nombre'];
        $cargo_empleado=$_POST['cargo_empleado'];
        $area=$_POST['area'];
        $celular=$_POST['celular'];
        $direccion=$_POST['direccion'];
        
        $sql="INSERT INTO empleado VALUES ($id_empleado,'".$cedula."','".$nombre."','".$cargo_empleado."','".$area."','".$celular."','".$direccion."')";
        
        $insertar=$obj->insert($sql);
        if($insertar){

            redirect(getUrl('Empleado','Empleado','listar'));
        }
    }
    
    public function listar(){
        
        $obj=new EmpleadoModel();
        
        $sql="SELECT *  FROM empleado";      
        
        $emple=$obj->consult($sql);
        
        include_once '../view/empleado/listar.php';
    }
    
    public function filtraremple(){
        $obj=new EmpleadoModel();
        
        $buscar=$_POST['buscar'];
        
        
        $sql="SELECT *  FROM empleado e WHERE (e.cedula_emplea LIKE '%".$buscar."%' OR e.nombre_empleado LIKE '%".$buscar."%')";
        
        $emple=$obj->consult($sql);
        
        include_once '../view/empleado/filtroEmpleado.php';
    }
    
    public function detalle() {
        $obj=new EmpleadoModel();
        $id_empleado=$_GET['id_empleado'];

        $sql="SELECT * FROM empleado Where id_empleado= $id_empleado";

        $emplea=$obj->consult($sql);
        $empleado=mysqli_fetch_assoc($emplea);

        $sql="SELECT * FROM empleado";

        include_once '../view/empleado/detalle.php';
    }
}
?>
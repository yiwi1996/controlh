<?php

use function PHPSTORM_META\sql_injection_subst;

include_once '../model/Proveedor/ProveedorModel.php';

class ProveedorController{
    public function getCreate(){
        $obj=new ProveedorModel();
        
        include_once '../view/proveedor/create.php';
    }
    
    public function postCreate(){
        $obj=new ProveedorModel();
        
        $nit=$_POST['nit'];
        $nombre=$_POST['nombre'];
        $direccion=$_POST['direccion'];
        $telefono=$_POST['telefono'];
        $contacto=$_POST['contacto'];
        $barrio=$_POST['barrio'];
        $ciudad=$_POST['ciudad'];


        
        $sql="INSERT INTO proveedor VALUES ('".$nit."','".$nombre."','".$direccion."','".$telefono."','".$contacto."','".$barrio."','".$ciudad."')";
    
        
        $insertar=$obj->insert($sql);

        if($insertar){
            redirect(getUrl('Proveedor','Proveedor','listar'));
        }
        

    }

    public function listar(){
        
        $obj=new ProveedorModel();
        
        $sql="SELECT *  FROM proveedor";      
        
        $proveedor=$obj->consult($sql);
        
        include_once '../view/proveedor/listar.php';
    }

    public function detalle() {
        $obj=new ProveedorModel();
        $nit=$_GET['nit'];

        $sql="SELECT * FROM proveedor Where nit=$nit";

        $prove=$obj->consult($sql);
        $proveedo=mysqli_fetch_assoc($prove);

        $sql="SELECT * FROM proveedor";

        include_once '../view/proveedor/detalle.php';
    }

}
?>
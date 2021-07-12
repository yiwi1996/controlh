<?php

use function PHPSTORM_META\sql_injection_subst;

include_once '../model/Marca/MarcaModel.php';

class MarcaController{
    public function getCreate(){
        $obj=new MarcaModel();
        
        include_once '../view/marca/create.php';
    }
    
    public function postCreate(){
        $obj=new MarcaModel();
        
        $id=$obj->autoincrement("marcas","id");
        $desc_marca=$_POST['desc_marca'];

        
        $sql="INSERT INTO marcas VALUES ($id,'".$desc_marca."')";
    
        
        $insertar=$obj->insert($sql);

        if($insertar){
            redirect(getUrl('Marca','Marca','listar'));
        }
        

    }

    public function listar(){
        
        $obj=new MarcaModel();
        
        $sql="SELECT *  FROM marcas";      
        
        $marca=$obj->consult($sql);
        
        include_once '../view/marca/listar.php';
    }

}
?>
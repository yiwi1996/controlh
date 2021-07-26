<div class="container" style="margin-top: 2%">
<div class="card-header bg-info text-white ">
    <div class="page-inner py-4">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h1 class="text-white pb-2 fw-bold">DETALLE   DE   EQUIPO</h1>
              
            </div>
        </div>
    </div>
</div>
<form>
  
<div class="card" bgcolor="red">
	<div class="card-body"> 

    <div class="modal-body row">
        <div class="col-md-2 mx-auto">
            <center><label>ID Equipo:</label></center>
            <span class="form-control " ><?php echo $equipo['id'] ?></span>

        </div>
    </div>

        <div class="modal-body row">
            <div class="form-group col-md-4">
                <label>Numero de Factura:</label>
                <span class="form-control " ><?php echo $equipo['num_factura'] ?></span>

            </div>
        </div>

    <div class="modal-body row">
            <div class="form-group col-md-4">
                <label>Serial:</label>
                <span class="form-control " ><?php echo $equipo['serial'] ?></span>

        </div>

        <div class="form-group col-md-4">
            <label>Activo Fijo:</label>
            <span class="form-control " ><?php echo $equipo['activo_fijo'] ?></span>

        </div>
    
        <div class="form-group col-md-4">
            <label>Tipo Equipo:</label>
            <span class="form-control " ><?php echo $equipo['desc_tipo_equipo'] ?></span>

        </div>
     

        <div class="form-group col-md-4">
            <label>Marca:</label>
            <span class="form-control " ><?php echo $equipo['desc_marca'] ?></span>
        </div>

         
        <div class="form-group col-md-4">
            <label>Valor:</label>
            <span class="form-control " ><?php echo $equipo['valor'] ?></span>

        </div>

        <div class="form-group col-md-4">
            <label>Garantia:</label>
            <span class="form-control " ><?php echo $equipo['garantia'] ?></span>

        </div>

        <div class="form-group col-md-12">
            <table  class="table table-striped">
                <tbody>
                    <tr>
                        <th>Descripcion Equipo:</th>
                        <td><?php echo $equipo['desc_equipo'] ?></td>  
                    </tr>
                    <tr>
                        <th>Caracteristicas Generales:</th> 
                        <td><?php echo $equipo['caracteristicas'] ?></td>  
                    </tr>
                    <tr>
                        <th>Accesorios:</th>
                        <td><?php echo $equipo['accesorios'] ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    
        <div class="form-group col-md-4"<?php if($equipo['tipo_equipo']!=6){?>style="display: none;" <?php } ?> >
            <label>Numero Soat:</label>
            <span class="form-control " ><?php echo $equipo['numero_soat'] ?></span>

        </div>

        <div class="form-group col-md-4"<?php if($equipo['tipo_equipo']!=6){?>style="display: none;" <?php } ?> >
            <label>Fecha Vencimiento Soat:</label>
            <span class="form-control " ><?php echo $equipo['fecha_vencimiento_soat'] ?></span>

        </div>

        <div class="form-group col-md-4"<?php if($equipo['tipo_equipo']!=6){?>style="display: none;" <?php } ?> >
            <label>Numero Tecnomecanica:</label>
            <span class="form-control " ><?php echo $equipo['numero_tecnomecanica'] ?></span>

        </div>

        <div class="form-group col-md-6" <?php if($equipo['tipo_equipo']!=6){?>style="display: none;" <?php } ?>>
            <label>Fecha Vencimiento Tecnomecanica:</label>
            <span class="form-control " ><?php echo $equipo['fecha_vencimiento_tecnomecanica'] ?></span>

        </div>
        
        <div class="form-group col-md-4"<?php if($equipo['tipo_equipo']!=1){?>style="display: none;" <?php } ?>>
            <label>Numero NII:</label>
            <span class="form-control " ><?php echo $equipo['numero_nii'] ?></span>
            
        </div>

        <div class="form-group col-md-4"<?php if($equipo['tipo_equipo']!=1){?>style="display: none;" <?php } ?>>
            <label>Fecha Verificacion:</label>
            <span class="form-control " ><?php echo $equipo['fecha_verificacion'] ?></span>
            
        </div>

        <div class="form-group col-md-4"<?php if($equipo['tipo_equipo']!=1){?>style="display: none;" <?php } ?>>
            <label>Codigo OAVM:</label>
            <span class="form-control " ><?php echo $equipo['cod_oavm'] ?></span>
            
        </div>

        <div <?php if($equipo['tipo_equipo']==6){?> class="form-group col-md-6"<?php }else{ ?>  class="form-group col-md-4"<?php }?>>
            <label>Usuario:</label>
            <span class="form-control " ><?php echo $equipo['usuario'] ?></span>

        </div>
  
        <div class="form-group col-md-8">
            <label>Proveedor:</label>
            <span class="form-control " ><?php echo $equipo['nombre'] ?></span>

        </div>
  
        <div  <?php if($equipo['tipo_equipo']==1){?> class="form-group col-md-6"<?php }else if($equipo['tipo_equipo']==3 || $equipo['tipo_equipo']==4){ ?>  class="form-group col-md-6"<?php }else{?>class="form-group col-md-4"<?php }?>>
            <label>Fecha Compra:</label>
            <span class="form-control " ><?php echo $equipo['fecha_compra'] ?></span>

        </div>

       
     
        <div <?php if($equipo['tipo_equipo']==1){?> class="form-group col-md-6"<?php }else if($equipo['tipo_equipo']==2 || $equipo['tipo_equipo']==5){?> class="form-group col-md-4"<?php }else if($equipo['tipo_equipo']==3 || $equipo['tipo_equipo']==4){ ?>   class="form-group col-md-6" <?php }else{?>class="form-group col-md-3"<?php }?>>
            <label>Fecha Fin de la Garantia:</label>
            <span class="form-control " ><?php echo $equipo['Fecha_fin_garantia'] ?></span>

        </div>
   
        <div class="form-group col-md-4"<?php if($equipo['id_sis_operativo']==4 || $equipo['id_sis_operativo']==NULL){?> style="display: none;" <?php } ?> >
            <label>Sistema Operativo:</label>
            <span class="form-control " ><?php echo $equipo['desc_operativo'] ?></span>

        </div>
   
        <div class="form-group col-md-6"<?php if($equipo['id_sis_operativo']==4 || $equipo['id_sis_operativo']==NULL){?> style="display: none;" <?php } ?>>
            <label>Licencia del Sistema Operativo:</label>
            <span class="form-control " ><?php echo $equipo['licen_operativo'] ?></span>

        </div>

        <div class="form-group col-md-6" <?php if($equipo['id_sis_operativo']==4 || $equipo['id_sis_operativo']==NULL){?> style="display: none;" <?php } ?>>
            <label>Paquete Office:</label>
            <span class="form-control " ><?php echo $equipo['desc_office'] ?></span>

        </div>

        <div class="form-group col-md-4" <?php if($equipo['id_sis_operativo']==4 || $equipo['id_sis_operativo']==NULL){?> style="display: none;" <?php } ?>>
            <label>Licencia de Office:</label>
            <span class="form-control " ><?php echo $equipo['licen_office'] ?></span>

        </div>
  
        <div class="form-group col-md-4" <?php if($equipo['id_sis_operativo']==4 || $equipo['id_sis_operativo']==NULL){?> style="display: none;" <?php } ?>>
            <label>Antivirus:</label>
            <span class="form-control " ><?php echo $equipo['desc_antivirus'] ?></span>

        </div>
  
        <div class="form-group col-md-4" <?php if($equipo['id_sis_operativo']==4 || $equipo['id_sis_operativo']==NULL){?> style="display: none;" <?php } ?>>
            <label>Licencia de Antivirus:</label>
            <span class="form-control " ><?php echo $equipo['licen_antivirus'] ?></span>

        </div>
    
        <div <?php if($equipo['tipo_equipo']==1){?> class="form-group col-md-6"<?php }else if($equipo['tipo_equipo']==2 || $equipo['tipo_equipo']==5){ ?>  class="form-group col-md-6"<?php }else if($equipo['tipo_equipo']==3 || $equipo['tipo_equipo']==4){?>class="form-group col-md-6"<?php }else{?>class="form-group col-md-3"<?php }?>>
            <label>Estado del Equipo:</label>
            <span class="form-control " ><?php echo $equipo['nombre_estado'] ?></span>

        </div>
   
        <div class="form-group col-md-6">
            <label>Centro de Operaciones:</label>
            <span class="form-control " ><?php echo $equipo['desc_co'] ?></span>

        </div>
 
    </div> 
    <div class="modal-body row">
        <div class="form-group col-md-12">
            <table  class="table table-striped">
                <thead>
                    <tr>
                        <th><center>Tipo intervencion</center></th>  
                        <th><center>Numero de veces que se realizo la intervencion</center> </th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <th><center>Preventivo:</center></th>  
                        <th><center><?php echo  $pre?></center> </th>
                    </tr>

                    <tr>
                        <th><center>Correctivo:</center></th>  
                        <th><center><?php echo  $corr?></center> </th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="form-group col-md-4">
            <a href="<?php echo getUrl("Equipo", "Equipo", "listar"); ?>"class="btn btn-danger">Atras</a> 

            <button id="botoncito" data-url="<?php echo getUrl("Equipo","Equipo","pdf",array("id"=>$equipo['id'],"serial"=>$equipo['serial']),"ajax")?>" type="button" class="btn btn-warning btn-info" data-toggle="modal" data-target="#exampleModal">
                    Ver PDF 
                </button>
        </div>
    </div>
    
</form>
</div>
    </div>




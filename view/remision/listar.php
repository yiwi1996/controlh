<div class="container" style="margin-top: 2%">
<div class="card-header bg-info text-white ">
    <div class="page-inner py-1">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h1 class="text-white pb-1 fw-bold">CONSULTAR REMISION</h1>
              
            </div>
        </div>
    </div>
</div>

<div class="card" bgcolor="red">
	<div class="card-body">

 <div class="row">

<!-- <div class="col-md-4 form-group">
<input type="text" name="filtro2" id="filtro2" class="form-control" placeholder="Buscar remision" data-url="<?= getUrl("Remision", "Remision", "filtraremi", false, "ajax"); ?>">
</div> -->

        <div class="col-md-12">
            <?php 
            if(isset($_SESSION['msj'])) {

                echo '<div class="alert alert-success" id="alert">'.$_SESSION['msj'].'</div>';
                unset($_SESSION['msj']);
            }
            ?>
        </div>
    </div>
    <table id="example" class="table table-striped table-bordered" style="width:100%">  
        <thead>
            <tr>
            <th colspan="1" width="5%">Numero Remision</th>
                <th colspan="1" width="10%">Despachado Por:</th>
                <th colspan="1" width="20%">Descripcion</th>
                <th colspan="1" width="37%"><center>ACCIONES</center></th>
            </tr>
        </thead>
        <tbody>
        <?php
         while ($remisi=mysqli_fetch_assoc($remi)) {
            echo "<tr>";
            echo "<td colspan='1' width='5%'>".$remisi['num_remi']."</td>";
            echo "<td colspan='1' width='10%'>".$remisi['nombre_despa']."</td>";
            echo "<td colspan='1' width='30%'>".$remisi['descripcion_remi']."</td>";
            echo "<td colspan='1' width='37%'> <center>
            <button class='btn btn-warning' id='botoncito' data-url='".getUrl("Remision","Remision","Editar",array("id_remision"=>$remisi['id_remision']),"ajax")."'>Editar</button>

            <button class='btn btn-danger' id='botoncito' data-url='".getUrl("Remision","Remision","Eliminar",array("id_remision"=>$remisi['id_remision']),"ajax")."'>Eliminar</button>

            
            <a href='".getUrl("Remision","Remision","detalle",
            array("id_remision"=>$remisi['id_remision']))."' class='btn btn-info'>Detalles</a> 
            
            </center>
        </td>";
        }
       
        ?>
        </tbody>
    </table>
</div>
</div>
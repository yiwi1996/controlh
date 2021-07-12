<div class="container" style="margin-top: 2%">
<div class="card-header bg-info text-white ">
    <div class="page-inner py-1">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h1 class="text-white pb-1 fw-bold">CONSULTAR INTERVENCION</h1>
              
            </div>
        </div>
    </div>
</div>

<div class="card" bgcolor="red">
	<div class="card-body">

    <div class="row">

    <!-- <div class="col-md-4 form-group" style="float: right;">
        <input type="text" name="filtro1" id="filtro1" class="form-control" placeholder="Buscar intervencion" data-url="<?= getUrl("Intervencion", "Intervencion", "filtrarinter", false, "ajax"); ?>">
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
                <th>Fecha Intervencion</th>
                <th>Realizado</th>
                <th>Serial</th>
               <th> <center>ACCIONES</center></th>
            </tr>
        </thead>
        <tbody>
        <?php
        while ($interve=mysqli_fetch_assoc($inter)) {
            echo "<tr>";
            echo "<td>".$interve['fecha_inter']."</td>";
            echo "<td>".$interve['realizado_inter']."</td>";
            echo "<td>".$interve['serial_inter']."</td>";
            echo "<td width:37%> <center>
                <button class='btn btn-warning' id='botoncito' data-url='".getUrl("Intervencion","Intervencion","Editar",array("id_intervencion"=>$interve['id_intervencion']),"ajax")."'>Editar</button>

                <button class='btn btn-danger' id='botoncito' data-url='".getUrl("Intervencion","Intervencion","Eliminar",array("id_intervencion"=>$interve['id_intervencion']),"ajax")."'>Eliminar</button>

                <button class='btn btn-primary' id='botoncito' data-url='".getUrl("Intervencion","Intervencion","detalle",array("id_intervencion"=>$interve['id_intervencion']),"ajax")."'> Ver Detalle</button> </center>
            </td>";
        }
        ?>
        </tbody>
    </table>
</div>
</div>
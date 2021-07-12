<div class="container" style="margin-top: 2%">
<div class="card-header bg-info text-white ">
    <div class="page-inner py-1">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h1 class="text-white pb-1 fw-bold">CONSULTAR BAJA EQUIPO</h1>
              
            </div>
        </div>
    </div>
</div>

<div class="card" bgcolor="red">
	<div class="card-body">

    <div class="row">

    <!--<div class="col-md-4 form-group">
        <input type="text" name="filtro" id="filtro" class="form-control" placeholder="Buscar equipo" data-url="<?= getUrl("BajaEquipo", "BajaEquipo", "filtraradjudicacion", false, "ajax"); ?>">
    </div>-->

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
                <th>Equipo</th>
                <th>Activo Fijo</th>
                <th>Serial</th>
                <th>Descripcion</th>
                <th> <center>ACCIONES</center></th>
            </tr>
        </thead>
        <tbody>
        <?php
        while ($baja=mysqli_fetch_assoc($bajaEqui)) {
            echo "<tr>";
            echo "<td>".$baja['equipo_baja']."</td>";
            echo "<td>".$baja['activo_baja']."</td>";
            echo "<td>".$baja['serial_baja']."</td>";
            echo "<td width='27%'>".$baja['descripcion']."</td>";
            echo "<td width='47%'> <center>
                <button class='btn btn-warning' id='botoncito' data-url='".getUrl("BajaEquipo","BajaEquipo","Editar",array("id_baja"=>$baja['id_baja']),"ajax")."'>Editar</button>

                <button class='btn btn-danger' id='botoncito' data-url='".getUrl("BajaEquipo","BajaEquipo","Eliminar",array("id_baja"=>$baja['id_baja']),"ajax")."'>Eliminar</button>

                <a href='".getUrl("BajaEquipo","BajaEquipo","detalle",
                array("id_baja"=>$baja['id_baja']))."' class='btn btn-info'>Detalles</a> </center>
            </td>";
        }
        ?>
        </tbody>
    </table>
</div>
</div>
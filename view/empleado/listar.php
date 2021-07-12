<div class="container" style="margin-top: 2%">
<div class="card-header bg-info text-white ">
    <div class="page-inner py-1">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h1 class="text-white pb-1 fw-bold">CONSULTAR EMPLEADO</h1>
              
            </div>
        </div>
    </div>
</div>

<div class="card" bgcolor="red">
	<div class="card-body">

    <div class="row">

    <!-- <div class="col-md-4 form-group" style="float: right;">
        <input type="text" name="filtro1" id="filtro1" class="form-control" placeholder="Buscar empleado" data-url="<?= getUrl("Empleado", "Empleado", "filtraremple", false, "ajax"); ?>">
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
                <th>Numero de Cedula</th>
                <th>Nombre Completo</th>
                <th>Cargo</th>
               <th> <center>ACCIONES</center></th>
            </tr>
        </thead>
        <tbody>
        <?php
        while ($emplea=mysqli_fetch_assoc($emple)) {
            echo "<tr>";
            echo "<td>".$emplea['cedula_emplea']."</td>";
            echo "<td>".$emplea['nombre_empleado']."</td>";
            echo "<td>".$emplea['cargo_empleado']."</td>";
            echo "<td width='37%'> <center>
                <button class='btn btn-warning' id='botoncito' data-url='".getUrl("Empleado","Empleado","Editar",array("id_empleado"=>$emplea['id_empleado']),"ajax")."'>Editar</button>

                <button class='btn btn-danger' id='botoncito' data-url='".getUrl("Empleado","Empleado","Eliminar",array("id_empleado"=>$emplea['id_empleado']),"ajax")."'>Eliminar</button>

                <button class='btn btn-primary' id='botoncito' data-url='".getUrl("Empleado","Empleado","detalle",array("id_empleado"=>$emplea['id_empleado']),"ajax")."'> Ver Detalle</button> </center>

            </td>";
        }
        ?>
        </tbody>
    </table>
</div>
</div>
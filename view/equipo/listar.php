<div class="container" style="margin-top: 2%">
<div class="card-header bg-info text-white ">
    <div class="page-inner py-1">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h1 class="text-white pb-1 fw-bold">CONSULTAR EQUIPO</h1>
              
            </div>
        </div>
    </div>
</div>

<div class="card" bgcolor="red">
    <div class="card-body">

    <div class="row">

    <!--<div class="col-md-4 form-group">
        <input type="text" name="filtro" id="filtro" class="form-control" placeholder="Buscar equipo" data-url="<?= getUrl("Equipo", "Equipo", "filtrarequipo", false, "ajax"); ?>">
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
                <th>Serial</th>
                <th>Activo Fijo</th>
                <th>Estado</th>
                <th>Tipo Equipo</th>
                <th> <center>ACCIONES</center></th>
            </tr>
        </thead>
        <tbody>
        <?php
        while ($equi=mysqli_fetch_assoc($equipo)) {
            $id=$equi['id'];
            echo "<tr>";
            echo "<td>".$equi['serial']."</td>";
            echo "<td>".$equi['activo_fijo']."</td>";
            if($equi['id_estado']== 2){
                echo "<td><span style='background-color:#C91506;color: #FFFFFF;'>Inhabilitado</span></td>";
            }else{
                echo "<td><span style='background-color:#0F61A4;color: #FFFFFF;'>".$equi['nombre_estado']."</span></td>";
            }
            echo "<td  width='15%'>".$equi['desc_tipo_equipo']."</td>";
            echo "<td width:37%> <center>";

            echo " <button  class='btn btn-warning' id='botoncito' data-url='".getUrl("Equipo","Equipo","Editar",array("id"=>$equi['id']),"ajax")."'>Editar</button>";

           if($equi['id_estado']== 2){
                echo " <button class='btn btn-success' onclick='alertEliminar($id,1);'>Habilitar</button> "; 
           }else{
                echo " <button class='btn btn-danger' onclick='alertEliminar($id,0);'>Inhabilitar</button> ";
           }
            echo " <a href='".getUrl("Equipo","Equipo","detalle",
                array("id"=>$equi['id']))."' class='btn btn-info'>Detalles</a> </center>
            </td>";
        }
        ?>
        </tbody>
    </table>
</div>
</div>
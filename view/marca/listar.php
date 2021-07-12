<div class="container" style="margin-top: 2%">
<div class="card-header bg-info text-white ">
    <div class="page-inner py-1">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h1 class="text-white pb-1 fw-bold">CONSULTAR MARCA</h1>
              
            </div>
        </div>
    </div>
</div>

<div class="card" bgcolor="red">
	<div class="card-body">

    <div class="row">

    <!-- <div class="col-md-4 form-group" style="float: right;">
        <input type="text" name="filtro1" id="filtro1" class="form-control" placeholder="Buscar empleado" data-url="<?= getUrl("Marca", "Marca", "filtrarmar", false, "ajax"); ?>">
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
                <th>Marca</th>
               <th> <center>ACCIONES</center></th>
            </tr>
        </thead>
        <tbody>
        <?php
        while ($mar=mysqli_fetch_assoc($marca)) {
            echo "<tr>";
            echo "<td>".$mar['desc_marca']."</td>";
            echo "<td width='37%'> <center>
                <button class='btn btn-warning' id='botoncito' data-url='".getUrl("Marca","Marca","Editar",array("id"=>$mar['id']),"ajax")."'>Editar</button>

                <button class='btn btn-danger' id='botoncito' data-url='".getUrl("Marca","Marca","Eliminar",array("id"=>$mar['id']),"ajax")."'>Eliminar</button>
            </td>";
        }
        ?>
        </tbody>
    </table>
</div>
</div>
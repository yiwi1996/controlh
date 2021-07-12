<?php
          while ($adjudi=mysqli_fetch_assoc($adjudicacion)) {
            echo "<tr>";
            echo "<td>".$adjudi['num_factura']."</td>";
            echo "<td>".$adjudi['activo_fijo']."</td>";
            echo "<td>".$adjudi['serial']."</td>";
            echo "<td>".$adjudi['descripcion']."</td>";
            echo "<td> <center>
                <button class='btn btn-warning' id='botoncito' data-url='".getUrl("Adjudicacion","Adjudicacion","Editar",array("id_adjudicacion"=>$adjudi['id_adjudicacion']),"ajax")."'>Editar</button>

                <button class='btn btn-danger' id='botoncito' data-url='".getUrl("Adjudicacion","Adjudicacion","Eliminar",array("id_adjudicacion"=>$adjudi['id_adjudicacion']),"ajax")."'>Eliminar</button>

                <button class='btn btn-primary' id='botoncito' data-url='".getUrl("Adjudicacion","Adjudicacion","detalle",array("id_adjudicacion"=>$adjudi['id_adjudicacion']),"ajax")."'> Ver Detalle</button> </center>
            </td>";
        }
        ?>
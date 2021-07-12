<?php
          while ($interve=mysqli_fetch_assoc($inter)) {
            echo "<tr>";
            echo "<td>".$interve['fecha_inter']."</td>";
            echo "<td>".$interve['realizado_inter']."</td>";
            echo "<td>".$interve['valor_inter']."</td>";
            echo "<td> <center>
                <button class='btn btn-warning' id='botoncito' data-url='".getUrl("Intervencion","Intervencion","Editar",array("id_intervencion"=>$interve['id_intervencion']),"ajax")."'>Editar</button>

                <button class='btn btn-danger' id='botoncito' data-url='".getUrl("Intervencion","Intervencion","Eliminar",array("id_intervencion"=>$interve['id_intervencion']),"ajax")."'>Eliminar</button>

                <button class='btn btn-primary' id='botoncito' data-url='".getUrl("Intervencion","Intervencion","detalle",array("id_intervencion"=>$interve['id_intervencion']),"ajax")."'> Ver Detalle</button> </center>
            </td>";
        }
        ?>
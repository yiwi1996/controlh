<?php
        while ($remisi=mysqli_fetch_assoc($remi)) {
            echo "<tr>";
            echo "<td>".$remisi['num_remi']."</td>";
            echo "<td>".$remisi['nombre_despa']."</td>";
            echo "<td>".$remisi['descripcion_remi']."</td>";
            echo "<td>".$remisi['empresa_remi']."</td>";
            echo "<td>".$remisi['funcionario_remi']."</td>";            
        }
        ?>
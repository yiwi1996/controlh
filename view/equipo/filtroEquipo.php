<?php
    while ($equi=mysqli_fetch_assoc($equipo)) {
        echo "<tr>";
        echo "<td>".$equi['serial']."</td>";
        echo "<td>".$equi['activo_fijo']."</td>";
        echo "<td>".$equi['desc_tipo_equipo']."</td>";
        echo "<td>".$equi['desc_marca']."</td>";
        echo "<td>".$equi['caracteristicas']."</td>";
        echo "<td>".$equi['usuario']."</td>";
        echo "<td>".$equi['fecha_compra']."</td>";
        echo "<td>".$equi['fecha_fin_garantia']."</td>";
        echo "<td>".$equi['nombre_estado']."</td>";
    }
?>
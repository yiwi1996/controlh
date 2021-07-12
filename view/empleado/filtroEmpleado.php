<?php
        while ($emplea=mysqli_fetch_assoc($emple)) {
            echo "<tr>";
            echo "<td>".$emplea['cedula_emplea']."</td>";
            echo "<td>".$emplea['nombre_empleado']."</td>";
            echo "<td>".$emplea['cargo_empleado']."</td>";
            echo "<td>".$emplea['celular']."</td>";
            echo "<td>".$emplea['direccion_emplea']."</td>";
        }
?>
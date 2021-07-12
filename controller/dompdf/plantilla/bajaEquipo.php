<?php 

for($i=0;$i<count($empleado);$i++){
    $emple=$empleado[$i];
    while ($emp=mysqli_fetch_assoc($emple)) {
       if($i==0){
            $validado_baja = $emp['nombre_empleado'];
            $cargo_v= $emp['cargo_empleado'];
            $area_v= $emp['area'];
           
       }

        if($i==1){
            $elaborado_baja = $emp['nombre_empleado'];
            $cargo_e= $emp['cargo_empleado'];
            $area_e= $emp['area'];
        }
        if($i==2){
            $autorizado_baja = $emp['nombre_empleado'];
            $cargo_a= $emp['cargo_empleado'];
            $area_a= $emp['area'];
        }
        if($i==3){
            $contabilizado_baja = $emp['nombre_empleado'];
            $cargo_c= $emp['cargo_empleado'];
            $area_c= $emp['area'];
        }        
    }
}
setlocale(LC_TIME,"es_ES");
$html .= '<html>';
$html .= '<head>';
$html .= '<meta charset="utf-8">';
$html.='<table style="width: 600px;">';
$html.='<tbody>';
    $html.='<tr>';
        $html.=' <td  width="30%">';
        $html.='<img src="../web/img/mercapaba.PNG" width="120px" >';
        $html .='</td>';

        $html.=' <td colspan="2" width="100%" style="text-align:center;">';
            $html.='BAJA DE ACTIVOS:';
        $html .='</td>';
    $html.='</tr>';
    $html.='<tr>';
        $html.=' <td  colspan="3"  style="text-align:right; width="100%">';
            $html.='N°:B-0'.$id_pdf;
        $html .='</td>';
    $html.='</tr';
$html.='</tbody>';    
$html.='</table>';

$html.='<table style="width: 600px;">';
$html.='<tbody>';
    $html.='<tr>';
        $html.=' <th><center>';
            $html.='Fecha';
        $html .='</th></center>';

        $html.=' <th>';
            $html.=':';
        $html .='</th>';

        $html.=' <td>';
            $html.=$info['fecha_baja'];
        $html .='</td>';
    $html.='</tr';
    $html.='<tr>';
        $html.=' <th><center>';
            $html.='Para';
        $html .='</th></center>';

        $html.=' <th>';
            $html.=':';
        $html .='</th>';

        $html.=' <td>';
            $html.=$contabilizado_baja;
        $html .='</td>';
    $html.='</tr';
    $html.='<tr>';
        $html.=' <th><center>';
            $html.='CC';
        $html .='</th></center>';

        $html.=' <th>';
            $html.=':';
        $html .='</th>';

        $html.=' <td>';
            $html.=$validado_baja;
        $html .='</td>';
    $html.='</tr';
    $html.='<tr>';
        $html.=' <th><center>';
            $html.='De';
        $html .='</th></center>';

        $html.=' <th>';
            $html.=':';
        $html .='</th>';

        $html.=' <td>';
            $html.=$autorizado_baja;
        $html .='</td>';
    $html.='</tr';
    $html.='<tr>';
        $html.=' <th><center>';
            $html.='Asunto';
        $html .='</th></center>';

        $html.=' <th>';
            $html.=':';
        $html .='</th>';

        $html.=' <td>';
            $html.=$info['asunto_baja'];
        $html .='</td>';
        $html.='</tr';
$html.='</tbody>';    
$html.='</table>';
$html.='<br>';
$html.='<div style="text-align:center; border-top-style: solid;" >'; 
    $html.='<br>A continuación, se relaciona información  artículos que se darán de baja por obsoletos y/o';
$html.='</div>';

$html.='<table style="width:100%;">';
    $html.='<tbody>';
           
        $html.='<tr>';
            $html.=' <th style="background-color:#E5E8E8">';
                $html.='SERIAL';
            $html .='</th>';
            $html.=' <th style="background-color:#E5E8E8">';
                $html.='ACTIVO FIJO';
            $html .='</th>';
            $html.=' <th style="background-color:#E5E8E8" colspan="2" width="300px">';
                $html.='DESCRIPCIÓN';
            $html .='</th>';
            $html.=' <th style="background-color:#E5E8E8"  >';
                $html.='VALOR';
            $html .='</th>';
        $html.='</tr>';
        foreach ($equipo as $equi ) {
            foreach ($equi as $equ ) {
                                
                $html.='<tr>';
                $html.=' <td>';
                $html.='<center>'.$equ['serial_baja'].'</center>';
                $html .='</td>';
                $html.=' <td>';
                $html.='<center>'.$equ['activo_baja'].'</center>';
                $html .='</td>';
                $html.=' <td colspan="2"  width="300px">';
                $html.=$equ['descripcion'];
                $html .='</td>';
                $html.=' <td>';
                $html.='<center>$'.$equ['valor'].'</center>';
                $html .='</td>';
                $html.='</tr>';
            }
        }
        $html.='<tr>';

        $html.=' <td  ><center>';
        $html.='<br><br><br>CONTABILIZADO POR:<br><br>';
        $html .='</center></td>';
        $html.=' <td><center>';
        $html.='<br><br><br>VALIDADO POR:<br><br>';
        $html .='</center></td>';
        $html.=' <td colspan="2"  width="300px"><center>';
        $html.='<br><br><br>AUTORIZADO POR:<br><br>';
        $html .='</center></td>';
        $html.=' <td><center>';
        $html.='<br><br><br>ELABORADO POR:<br><br>';
        $html .='</center></td>';
        $html.='</tr>';



    $html.='</tbody>';
$html.='</table>';
$html.='<table style="width:100%;">';
    $html.='<tbody>';
    $html.='<tr>';
    $html.=' <td style=" border-top-style: solid;"><center>';
    $html.=''.$contabilizado_baja.'';
    $html .='</center></td>';
    $html.=' <td style=" border-top-style: solid;"><center>';
    $html.=''.$validado_baja.'';
    $html .='</center></td>';
    $html.=' <td  style=" border-top-style: solid;"><center>';
    $html.=''.$autorizado_baja.'';
    $html .='</center></td>';
    $html.=' <td  style=" border-top-style: solid;"><center>';
    $html.=''.$elaborado_baja.'';
    $html .='</center></td>';
    $html.='</tr>';
    $html.='<tr>';
    $html.=' <td ><center>';
    $html.='Cargo: '.$cargo_c.'';
    $html .='</center></td>';
    $html.=' <td ><center>';
    $html.='Cargo: '.$cargo_v.'';
    $html .='</center></td>';
    $html.=' <td  ><center>';
    $html.='Cargo: '.$cargo_a.'';
    $html .='</center></td>';
    $html.=' <td  ><center>';
    $html.='Cargo: '.$cargo_e.'';
    $html .='</center></td>';
    $html.='</tr>';
    $html.='</tbody>';
$html.='</table>';
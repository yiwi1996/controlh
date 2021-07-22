<?php


    
    if ($info['id_adjudicacion']) {     
        $id_adjudicacion = $info['id_adjudicacion'];
       
    }
    
    if ($info['num_factura']) {     
        $num_factura = $info['num_factura'];
        
    }
    
    if ($info['nombre']) {     
        $nombre = $info['nit'];
    }
    
    if ($info['fecha_entrega']) {     
        $fecha_entrega = $info['fecha_entrega'];
    }
    
    if ($info['nombre_area']) {     
        $nombre_area = $info['nombre_area'];
    }
    
    if ($info['nombre_cargo']) {     
        $nombre_cargo = $info['nombre_cargo'];
    }
    
    for($i=0;$i<count($empleado);$i++){
        $emple=$empleado[$i];
        while ($emp=mysqli_fetch_assoc($emple)) {
           if($i==0){
                $nombre_r = $emp['nombre_empleado'];
                $cargo_r= $emp['cargo_empleado'];
                $area_r= $emp['area'];
           }

            if($i==1){
                $nombre_en = $emp['nombre_empleado'];
                $cargo_en= $emp['cargo_empleado'];
                $area_en= $emp['area'];
            }
            if($i==2){
                
                $nombre_copia = $emp['nombre_empleado'];
                $cargo_copia= $emp['cargo_empleado'];
                $area_copia= $emp['area'];
            }
            if($i==3){
                $nombre_conta = $emp['nombre_empleado'];
                $cargo_conta= $emp['cargo_empleado'];
                $area_conta= $emp['area'];
            }        
        }
    }
    
    if ($info['observaciones']) {     
        $observaciones = $info['observaciones'];
    }
    
    
    if ($info['recibido']) {     
        $recibido = $info['recibido'];
    }
 

setlocale(LC_TIME,"es_ES");
$html .= '<html>';
$html .= '<head>';
$html .= '<meta charset="utf-8">';
$html.='<img src="../web/img/mercapaba.PNG" width="160px" >';
$html.='<div   style="border: 1px solid;">';
$html.='<table   style="width: 100%;">';
$html.='<tbody>';
$html.='<tr>';

$html.=' <td colspan="3" width="95%">';
$html.='ORDEN DE ADJUDICACION DE ACTIVOS FIJOS  ';
$html .='</td>';
$html.=' <td width="95%">';
$html.='N°:'.$num_pdf;
$html .='</td>';

$html.='</tr>';


$html.='<tr>';
$html.=' <td  width="20%">';
$html.='<br><br><br>Proveedor:';
$html .='</td>';
$html.=' <td colspan="3" width="100%">';
$html.='<br><br><br>'.$nombre;
$html .='</td>';
$html.='</tr>';

$html.='<tr>';
$html.=' <td  width="20%">';
$html.='Numero de Factura:';
$html .='</td>';
$html.=' <td colspan="3" width="100%">';
$html.=$num_factura;
$html .='</td>';
$html.='</tr>';

$html.='<tr>';
$html.=' <td  width="20%">';
$html.='Fecha de Entrega:';
$html .='</td>';
$html.=' <td colspan="3" width="100%">';
$html.=$fecha_entrega;
$html .='</td>';
$html.='</tr>';




$html.='<tr>';
$html.='<br><br><br>';
$html.=' <td colspan="3" width="95%">';
$html.='Equipo adjudicado a:';
$html .='</td>';
$html.=' <td>';
$html.='<br><br><br>';
$html .='</td>';

$html.='</tr>';

$html.='<tr>';
$html.=' <td style="text-align:right" width="20%">';
$html.='Area:';
$html .='</td>';
$html.=' <td colspan="3" width="100%">';
$html.=$area_r;
$html .='</td>';
$html.='</tr>';

$html.='<tr>';
$html.=' <td style="text-align:right"  width="20%">';
$html.='Cargo:';
$html .='</td>';
$html.=' <td colspan="3" width="100%">';
$html.=$cargo_r;
$html .='</td>';
$html.='</tr>';

$html.='<tr>';
$html.=' <td style="text-align:right"  width="20%">';
$html.='Nombre:';
$html .='</td>';
$html.=' <td colspan="3" width="100%">';
$html.=$nombre_r;
$html .='</td>';
$html.='</tr>';

$html.='<tr>';
$html.=' <td  width="20%">';
$html.='<br><br><br>OBSERVACIONES:<br><br>';
$html .='</td>';
$html.=' <td colspan="3" width="100%">';
$html.='<br><br><br>'.$observaciones.'<br><br>';
$html .='</td>';
$html.='</tr>';

$html.='<tr>';
$html.=' <th style="background-color:#E5E8E8">';
$html.='SERIAL';
$html .='</th>';
$html.=' <th style="background-color:#E5E8E8">';
$html.='ACTIVO FIJO';
$html .='</th>';
$html.=' <th style="background-color:#E5E8E8" colspan="2"  width="300px">';
$html.='DESCRIPCIÓN';
$html .='</th>';
$html.=' <th style="background-color:#E5E8E8"  >';
$html.='VALOR';
$html .='</th>';
$html.='</tr>';
$j=0;
do{
  
    $html.='<tr>';
    $html.=' <td>';
    $html.='<center>'.$serial1[$j].'</center>';
    $html .='</td>';
    $html.=' <td>';
    $html.='<center>'.$activo_fijo1[$j].'</center>';
    $html .='</td>';
    $html.=' <td colspan="2"  width="300px">';
    $html.=$descripcion1[$j];
    $html .='</td>';
    $html.=' <td>';
    $html.='<center>$'.$valor1[$j].'</center>';
    $html .='</td>';
    $html.='</tr>';
    
    $j++;
}while($j<$n);
$html.='</tbody>';
$html.='</table>';

$html.='<table  style="width: 100%;">';
$html.='<tbody>';
$html.='<tr>';
$html.=' <td  >';
$html.='<br><br><br>RECIBIDO POR:<br><br>';
$html .='</td>';
$html.=' <td>';
$html.='<br><br><br>ENTREGADO POR:<br><br>';
$html .='</td >';
$html.=' <td ><center>';
$html.='<br><br><br>COPIA:<br><br>';
$html .='<center></td>';
$html.=' <td>';
$html.='<br><br><br>CONTABILIZADO POR:<br><br>';
$html .='</td>';
$html.='</tr>';

    $html.='<tr>';
    $html.=' <td style=" border-top-style:  solid"><center>';
    $html.=''.$nombre_r.'';
    $html .='</center></td>';
    $html.=' <td style=" border-top-style:  solid"><center>';
    $html.=''.$nombre_en.'';
    $html .='</center></td>';
    $html.=' <td   style=" border-top-style:  solid"><center>';
    $html.=''.$nombre_copia.'';
    $html .='</center></td>';
    $html.=' <td  style=" border-top-style:  solid"><center>';
    $html.=''.$nombre_conta.'';
    $html .='</center></td>';
    $html.='</tr>';
    $html.='<tr>';
    $html.=' <td ><center>';
    $html.='Cargo: '.$cargo_r.'';
    $html .='</center></td>';
    $html.=' <td ><center>';
    $html.='Cargo: '.$cargo_en.'';
    $html .='</center></td>';
    $html.=' <td  ><center>';
    $html.='Cargo: '.$cargo_copia.'';
    $html .='</center></td>';
    $html.=' <td  ><center>';
    $html.='Cargo: '.$cargo_conta.'';
    $html .='</center></td>';
    $html.='</tr>';
    $html.='</tbody>';
$html.='</table>';
$html.='</div>';



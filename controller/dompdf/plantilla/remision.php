<?php

while($info=mysqli_fetch_assoc($resultado)){
    
    if ($info['id_remision']) {     
        $id_remision = $info['id_remision'];
    }
    
    if ($info['fecha_remi']) {
        $fecha_remi = $info['fecha_remi'];  
    }
    
    if ($info['hora_envio_remi']) {
        $hora_envio_remi = $info['hora_envio_remi'];
    }
    
    if ($info['temporal_remi']) {    
        $temporal_remi = $info['temporal_remi'];   
    }
    
    if ($info['definitivo_remi']) {    
        $definitivo_remi = $info['definitivo_remi'];
    }
    
    if ($info['fecha_devo_remi']) {    
        $fecha_devo_remi = $info['fecha_devo_remi'];     
    }
    
    if ($info['empresa_remi']) {
        $empresa_remi = $info['empresa_remi'];
    }
    
    if ($info['direccion_remi']) {
        $direccion_remi = $info['direccion_remi'];   
    }
    
    if ($info['funcionario_remi']) {
        $funcionario_remi = $info['funcionario_remi'];
    }
    
    if ($info['activo_remi']) {
        $activo_remi = $info['activo_remi'];             
    }
    
    if ($info['serie_remi']) {
        $serie_remi = $info['serie_remi'];             
    }
    
    if ($info['descripcion_remi']) {
        $descripcion_remi = $info['descripcion_remi'];             
    }
    
    if ($info['observacion_remi']) {
        $observacion_remi = $info['observacion_remi'];             
    }
    
    if ($info['nombre_despa']) {
        $nombre_despa = $info['nombre_despa'];             
    }
    
    if ($info['nombre_transpor']) {
        $nombre_transpor = $info['nombre_transpor'];             
    }
    
    if ($info['nombre_moti']) {  
        $nombre_moti = $info['nombre_moti'];             
    }
    
    if ($info['nombre_area']) { 
        $nombre_area = $info['nombre_area'];             
    }
    
    if ($info['dep_nombre']) {
        $dep_nombre = $info['dep_nombre'];             
    }
    
    if ($info['ciu_nombre']) {
        $ciu_nombre = $info['ciu_nombre'];             
    }
    
    if ($info['nombre_estado']) {
        $nombre_estado = $info['nombre_estado'];             
    }
    
}

setlocale(LC_TIME,"es_ES");
$html = '<html>';
$html .= '<head>';
$html .= '<meta charset="utf-8">';
$html.='<table style="width: 600px;">';
$html.='<tbody>';
$html.='<tr>';
    $html.=' <td  width="30%">';
    $html.='<img src="../web/img/mercapaba.PNG" width="70px" >';
    $html .='</td>';

    $html.=' <td colspan="2" width="100%" style="text-align:center;">';
        $html.='REMISION DE EQUIPO NUMERO:';
    $html .='</td>';

    $html.=' <td  style="text-align:right; width="100%">';
        $html.=$id_remision;
    $html .='</td>';
$html.='</tr>';
$html.='</tbody>';    
$html.='</table>';
$html.='<center><p class="separador1">Mercapava S.A Nit.815.002.459. Calle 7 No. 9-59   Pbx (2) 2834030 Pradera - Valle     E-mail: otrs@mercapava.com.co</p></center>';

$html .= '<style type="text/css">';

$html .= '.separador1{
    font-family:Helvetica;
    font-size:9px;
}
';

$html .= '.separador{
    text-align:left;
    font-family:Helvetica;
    font-size:10px;
}
';

$html .= '.borde{
    border-collapse: collapse;
}
';

$html.='.tabla {
    width: 100%;
    border-collapse: collapse;
    border: 1px solid black;
  }';
  $html.='.tabla1 {
    border-collapse: collapse;
    border: 1px solid black;
  }';
  

$html .= '</style>';
$html .= '</head>';
$html .= '<body>';

$html.='<table style="width:100%;" class="tabla">';
$html.='<tbody>';
$html.='<tr>';
    $html.=' <td  width="27%">';
        $html.='Fecha:';
    $html .='</td>';

    $html.=' <td  width="27%">';
        $html.=$fecha_remi;
    $html .='</td>';

    $html.=' <td  width="27%">';
        $html.='Hora Envio:';
    $html .='</td>';

    $html.=' <td class="borde tabla1" width="27%">';
        $html.=$hora_envio_remi;
    $html .='</td>';
$html.='</tr>';
$html.='</tbody>';    
$html.='</table>';

$html.='<label class="separador">TIPO DE ENVIO</label>';

$html.='<table style="width:100%;" class="tabla">';
$html.='<tbody>';
$html.='<tr>';

    if($temporal_remi!=0){
    
    $html.=' <td  width="27%">';
        $html.='Temporal:';      
    $html .='</td>';

    $html.=' <td  width="27%" style="text-align:center;">';
        $html.='<p>X</p>';
    $html .='</td>';

    $html.=' <td  width="27%">';
        $html.='Fecha Devolución:';
    $html .='</td>';

    $html.=' <td  width="27%" style="text-align:center;">';
        $html.=$fecha_devo_remi;
    $html .='</td>';
}else{

    $html.=' <td  colspan="2" width="27%">';
        $html.='Temporal:';      
    $html .='</td>';

    $html.=' <td  colspan="2" width="27%">';
        $html.='Fecha Devolución:';
    $html .='</td>';

};

$html.='</tr>';

$html.='<tr>';

    if($definitivo_remi!=0){
        
        $html.=' <td  width="27%">';
            $html.='Definitivo:';
        $html .='</td>';

        $html.=' <td  width="27%">';
            $html.='<p>X</p>';
        $html .='</td>';

        $html.=' <td colspan="2" width="27%">';
            $html.='No aplica fecha de devolución:';
        $html .='</td>';

    }else{
    
        $html.=' <td  colspan="2"  width="27%">';
            $html.='Definitivo:';
        $html .='</td>';

        $html.=' <td colspan="2" width="27%">';
            $html.='No aplica fecha de devolución:';
        $html .='</td>';
    };  
$html.='</tr>';

$html.='</tbody>';    
$html.='</table>';

$html.='<label class="separador">Despachado</label>';

$html.='<table style="width:100%;" class="tabla">';
$html.='<tbody>';
$html.='<tr>';
    $html.=' <td  width="27%">';
        $html.='Despachado por:';
    $html .='</td>';

    $html.=' <td  width="27%">';
        $html.=$nombre_despa;
    $html .='</td>';

    $html.=' <td  width="27%">';
        $html.='Motivo:';
    $html .='</td>';

    $html.=' <td class="borde" width="27%">';
        $html.=$nombre_moti;
    $html.='</td>';
$html.='</tr>';

$html.='<tr>';
    $html.=' <td  width="27%">';
        $html.='Transportado por:';
    $html .='</td>';

    $html.=' <td  width="27%">';
        $html.=$nombre_transpor;
    $html .='</td>';

    $html.=' <td  width="27%">';
       
    $html .='</td>';
    $html.=' <td  width="27%">';
       
    $html .='</td>';

$html.='</tr>';
$html.='</tbody>';    
$html.='</table>';

$html.='<label class="separador">Destino</label>';

$html.='<table style="width:100%;" class="tabla">';
$html.='<tbody>';
$html.='<tr>';
    $html.=' <td  width="27%">';
        $html.='Empresa:';
    $html .='</td>';

    $html.=' <td  width="27%">';
        $html.=$empresa_remi;
    $html .='</td>';

    $html.=' <td  width="27%">';
        $html.='Funcionario:';
    $html .='</td>';

    $html.=' <td class="borde" width="27%">';
        $html.=$funcionario_remi;
    $html.='</td>';
$html.='</tr>';

$html.='<tr>';
    $html.=' <td  width="27%">';
        $html.='Direccion:';
    $html .='</td>';

    $html.=' <td  width="27%">';
        $html.=$direccion_remi;
    $html .='</td>';

    $html.=' <td  width="27%">';
        $html.='Ciudad:';
    $html .='</td>';

    $html.=' <td class="borde" width="27%">';
        $html.=$ciu_nombre;
    $html.='</td>';
$html.='</tr>';
$html.='</tbody>';    
$html.='</table>';

$html.='<label class="separador">ITEMS</label>';

$html.='<table style="width:100%;" class="tabla">';
    $html.='<thead>';
        $html.='<tr>';
            $html.=' <th class="borde tabla1"  width="27%">';
                $html.='Activo:';
            $html .='</th>';

            $html.=' <th class="borde tabla1" width="27%">';
                $html.='Serie:';
            $html .='</th>';

            $html.=' <th class="borde tabla1" colspan="3"  width="100%">';
                $html.='Descripcion:';
            $html .='</th>';

            $html.=' <th class="borde tabla1"  width="27%">';
                $html.='Estado:';
            $html .='</th>';
        $html.='</tr>';
    $html.='<thead>';

    $html.='<tbody>'; 
    foreach ($equipo1 as $equi ) {
        foreach ($equi as $equ ) {
            $html.='<tr>';
                $html.=' <td class="borde tabla1" width="27%" style="text-align:center;">';
                    $html.=$equ['activo_remi'];
                $html .='</td>';

                $html.=' <td class="borde tabla1" width="27%" style="text-align:center;">';
                    $html.=$equ['serie_remi'];
                $html.='</td>';

                $html.=' <td class="borde tabla1" colspan="3" width="27%" style="text-align:center;">';
                    $html.=$equ['descripcion_remi'];
                $html.='</td>';

                $html.=' <td class="borde tabla1" width="27%" style="text-align:center;">';
                    $html.=$equ['nombre_estado'];
                $html.='</td>';

            $html.='</tr>';
        }
    }

    $html.='</tbody>';  
$html.='</table>';

$html.='<table style="width: 600px;">';
$html.='<tbody>';
$html.='<tr>';
    $html.=' <td  width="27%" >';
        $html.='Observacion:';
    $html .='</td>';

    $html.=' <td  width="27%">';
        $html.=$observacion_remi;
    $html .='</td>';

$html.='</tr>';
$html.='</tbody>';    
$html.='</table>';
$html.='<br>';

$html.='<table style="width:100%;" >';
    $html.='<thead>';
        $html.='<tr>';
            $html.=' <th   width="27%">';
                $html.='Despacha:';
            $html .='</th>';

            $html.=' <th  width="27%">';
                $html.='Recibe:';
            $html .='</th>';

            $html.=' <th  width="27%">';
                $html.='Transporta:';
            $html .='</th>';

            $html.=' <th   width="27%">';
                $html.='Autoriza:';
            $html .='</th>';
        $html.='</tr>';
    $html.='<thead>';
$html.='</table>';
//-----------------------------copia----------------------------
$html.='<center><label class="separador">COPIA RIESGOS Y SERVICIOS</label></center>';
$html.='<table style="width: 600px;">';
$html.='<tbody>';
$html.='<tr>';
    $html.=' <td  width="30%">';
    $html.='<img src="../web/img/mercapaba.PNG" width="70px">';
    $html .='</td>';

    $html.=' <td colspan="2" width="100%" style="text-align:center;">';
        $html.='REMISION DE EQUIPO NUMERO:';
    $html .='</td>';

    $html.=' <td  style="text-align:right; width="100%">';
        $html.=$id_remision;
    $html .='</td>';
$html.='</tr>';
$html.='</tbody>';    
$html.='</table>';
$html.='<center><p class="separador1">Mercapava S.A Nit.815.002.459. Calle 7 No. 9-59   Pbx (2) 2834030 Pradera - Valle     E-mail: otrs@mercapava.com.co</p></center>';

$html .= '</style>';
$html .= '</head>';
$html .= '<body>';

$html.='<table style="width:100%;" class="tabla">';
$html.='<tbody>';
$html.='<tr>';
    $html.=' <td  width="27%">';
        $html.='Fecha:';
    $html .='</td>';

    $html.=' <td  width="27%">';
        $html.=$fecha_remi;
    $html .='</td>';

    $html.=' <td  width="27%">';
        $html.='Hora Envio:';
    $html .='</td>';

    $html.=' <td class="borde tabla1" width="27%">';
        $html.=$hora_envio_remi;
    $html .='</td>';
$html.='</tr>';
$html.='</tbody>';    
$html.='</table>';
$html.='<label class="separador">TIPO DE ENVIO</label>';
$html.='<table style="width:100%;" class="tabla">';
$html.='<tbody>';
$html.='<tr>';
    $html.=' <td  width="27%">';
     $html.='Temporal:';      
    $html .='</td>';

    if($temporal_remi!=0){

    $html.=' <td  width="27%" style="text-align:center;">';
        $html.='<p>X</p>';
    $html .='</td>';

    $html.=' <td  width="27%">';
        $html.='Fecha Devolución:';
    $html .='</td>';

    $html.=' <td  width="27%" style="text-align:center;">';
        $html.=$fecha_devo_remi;
    $html .='</td>';
}else{
    $html.=' <td  width="27%">';
    $html .='</td>';

    $html.=' <td  width="27%">';
        $html.='Fecha Devolución:';
    $html .='</td>';
    $html.=' <td  width="27%">';
    $html .='</td>';
};

$html.='</tr>';

$html.='<tr>';

    $html.=' <td  width="27%">';
        $html.='Definitivo:';
    $html .='</td>';
    if($definitivo_remi!=0){
    
        $html.=' <td  width="27%">';
            $html.='<p>X</p>';
        $html .='</td>';

        $html.=' <td  width="27%">';
            $html.='No aplica fecha de devolución:';
        $html .='</td>';

        $html.=' <td  width="27%">';
        $html .='</td>';
    }else{
        $html.=' <td  width="27%">';
        $html .='</td>';

        $html.=' <td  width="27%">';
            $html.='No aplica fecha de devolución:';
        $html .='</td>';

        $html.=' <td  width="27%">';
        $html .='</td>';
    };  
$html.='</tr>';

$html.='</tbody>';    
$html.='</table>';

$html.='<label class="separador">Despachado</label>';

$html.='<table style="width:100%;" class="tabla">';
$html.='<tbody>';
$html.='<tr>';
    $html.=' <td  width="27%">';
        $html.='Despachado por:';
    $html .='</td>';

    $html.=' <td  width="27%">';
        $html.=$nombre_despa;
    $html .='</td>';

    $html.=' <td  width="27%">';
        $html.='Motivo:';
    $html .='</td>';

    $html.=' <td class="borde" width="27%">';
        $html.=$nombre_moti;
    $html.='</td>';
$html.='</tr>';

$html.='<tr>';
    $html.=' <td  width="27%">';
        $html.='Transportado por:';
    $html .='</td>';

    $html.=' <td  width="27%">';
        $html.=$nombre_transpor;
    $html .='</td>';

    $html.=' <td  width="27%">';
       
    $html .='</td>';
    $html.=' <td  width="27%">';
       
    $html .='</td>';

$html.='</tr>';
$html.='</tbody>';    
$html.='</table>';

$html.='<label class="separador">Destino</label>';

$html.='<table style="width:100%;" class="tabla">';
$html.='<tbody>';
$html.='<tr>';
    $html.=' <td  width="27%">';
        $html.='Empresa:';
    $html .='</td>';

    $html.=' <td  width="27%">';
        $html.=$empresa_remi;
    $html .='</td>';

    $html.=' <td  width="27%">';
        $html.='Funcionario:';
    $html .='</td>';

    $html.=' <td class="borde" width="27%">';
        $html.=$funcionario_remi;
    $html.='</td>';
$html.='</tr>';

$html.='<tr>';
    $html.=' <td  width="27%">';
        $html.='Direccion:';
    $html .='</td>';

    $html.=' <td  width="27%">';
        $html.=$direccion_remi;
    $html .='</td>';

    $html.=' <td  width="27%">';
        $html.='Ciudad:';
    $html .='</td>';

    $html.=' <td class="borde" width="27%">';
        $html.=$ciu_nombre;
    $html.='</td>';
$html.='</tr>';
$html.='</tbody>';    
$html.='</table>';

$html.='<label class="separador">ITEMS</label>';

$html.='<table style="width:100%;" class="tabla">';
    $html.='<thead>';
        $html.='<tr>';
            $html.=' <th class="borde tabla1"  width="27%">';
                $html.='Activo:';
            $html .='</th>';

            $html.=' <th class="borde tabla1" width="27%">';
                $html.='Serie:';
            $html .='</th>';

            $html.=' <th class="borde tabla1" colspan="3"  width="100%">';
                $html.='Descripcion:';
            $html .='</th>';

            $html.=' <th class="borde tabla1"  width="27%">';
                $html.='Estado:';
            $html .='</th>';
        $html.='</tr>';
    $html.='<thead>';

    $html.='<tbody>'; 
    foreach ($equipo1 as $equi ) {
        foreach ($equi as $equ ) {
            $html.='<tr>';
                $html.=' <td class="borde tabla1" width="27%" style="text-align:center;">';
                    $html.=$equ['activo_remi'];
                $html .='</td>';

                $html.=' <td class="borde tabla1" width="27%" style="text-align:center;">';
                    $html.=$equ['serie_remi'];
                $html.='</td>';

                $html.=' <td class="borde tabla1" colspan="3" width="27%" style="text-align:center;">';
                    $html.=$equ['descripcion_remi'];
                $html.='</td>';

                $html.=' <td class="borde tabla1" width="27%" style="text-align:center;">';
                    $html.=$equ['nombre_estado'];
                $html.='</td>';

            $html.='</tr>';
        }
    }

    $html.='</tbody>';  
$html.='</table>';

$html.='<table style="width: 600px;">';
$html.='<tbody>';
$html.='<tr>';
    $html.=' <td  width="27%">';
        $html.='Observacion:';
    $html .='</td>';

    $html.=' <td  width="27%" >';
        $html.=$observacion_remi;
    $html .='</td>';

$html.='</tr>';
$html.='</tbody>';    
$html.='</table>';

$html.='<br>';
$html.='<table style="width:100%;">';
    $html.='<thead>';
        $html.='<tr>';
            $html.=' <th  width="27%">';
                $html.='Despacha:';
            $html .='</th>';

            $html.=' <th  width="27%">';
                $html.='Recibe:';
            $html .='</th>';

            $html.=' <th   width="27%">';
                $html.='Transporta:';
            $html .='</th>';

            $html.=' <th   width="27%">';
                $html.='Autoriza:';
            $html .='</th>';
        $html.='</tr>';
    $html.='<thead>';
$html.='</table>';
$html .= '</body>';
$html .= '</html>';


?>
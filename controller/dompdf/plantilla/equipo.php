<?php

$html .= '<html>';
$html .= '<head>';
$html .= '<meta charset="utf-8">';
$html.='<img src="../web/img/mercapaba.PNG" width="160px" >';
$html.='<table style="width: 100%;">';
    $html.='<tbody>';
        $html.='<tr>';
            $html.='<td>';
                $html.='AREA DE TECNOLOGÍA';
            $html.='</td>';

            $html.='<td>';
                $html.='HOJA DE VIDA DE EQUIPOS';
            $html.='</td>';
        $html.='</tr>';
    $html.='</tbody>';
$html.='</table>';
$html.='<p>1.Descripción</p>';
$html.='<table border="2"  cellspacing="0" cellpadding="5px" style="width: 100%;" >';
    $html.='<tbody>';
        $html.='<tr>';
            $html.='<td colspan="3">';
                $html.='Nombre :'.$equi['desc_equipo'];
            $html.='</td>';           
        $html.='</tr>';

        $html.='<tr>';
            $html.='<td>';
                $html.='Marca :'.$equi['desc_marca'];
            $html.='</td>';

            $html.='<td>';
                $html.='Serial :'.$equi['serial'];
            $html.='</td>';

            $html.='<td>';
                $html.='Activo Fijo :'.$equi['activo_fijo'];
            $html.='</td>';

        $html.='</tr>';
        $html.='<tr>';
            $html.='<td colspan="3">';
                $html.='Caracteristicas generales :'.$equi['caracteristicas'];
            $html.='</td>';
        $html.='</tr>';
        $html.='<tr>';
            $html.='<td colspan="3">';
                $html.='Accesorios :'.$equi['accesorios'];
            $html.='</td>';
        $html.='</tr>';
        $html.='<tr>';
            $html.='<td colspan="3">';
                $html.='Usuario :'.$equi['usuario'];
            $html.='</td>';
        $html.='</tr>';
    $html.='</tbody>';
$html.='</table>';
$html.='</br>';
$html.='<p>2. Adquisición</p>';
$html.='<table border="2"  cellspacing="0" cellpadding="5px" style="width: 100%;" >';
    $html.='<tbody>';
        $html.='<tr>';
            $html.='<td>';
                $html.='Proveedor :'.$prov['nombre'];
            $html.='</td>';

            $html.='<td>';
                $html.='Dirección :'.$prov['direccion'];
            $html.='</td>';

            $html.='<td>';
                $html.='Barrio :'.$prov['barrio'];
            $html.='</td>';

        $html.='</tr>';
        $html.='<tr>';
                $html.='<td>';
                    $html.='Numero de Factura :'.$equi['num_factura'];
                $html.='</td>';

                $html.='<td>';
                    $html.='Valor :'.$equi['valor'];
                $html.='</td>';

                $html.='<td>';
                    $html.='Fecha :'.$equi['fecha_compra'];
                $html.='</td>';

        $html.='</tr>';

        $html.='<tr>';
            $html.='<td>';
                $html.='Contacto :'.$prov['contacto'];
            $html.='</td>';

            $html.='<td>';
                $html.='Telefono :'.$prov['telefono'];
            $html.='</td>';

            $html.='<td>';
                $html.='Celular :';
            $html.='</td>';

        $html.='</tr>';
    $html.='</tbody>';
$html.='</table>';
if($intervencion !='' && isset($intervencion)){
$html.='<p>3.Registro de Intervenciones';
$html.='<table border="2"  cellspacing="0" cellpadding="5px" style="width: 100%;" >';
    $html.='<tbody>';
        $html.='<tr>';
            $html.='<td rowspan="2"><center>';
                $html.='Fecha';
            $html.='</center></td>';

            $html.='<td colspan="2"><center>';
                $html.='Mtto';
            $html.='</center></td>';

            $html.='<td rowspan="2"  colspan="3"  style="width:250px;"><center>';
                $html.='Detalle';
            $html.='</center></td>';

            $html.='<td rowspan="2"><center>';
                $html.='Realizado';
            $html.='</center></td>';

            $html.='<td rowspan="2"><center>';
                $html.='Valor';
            $html.='</center></td>';

        $html.='</tr>';

        $html.='<tr>';
            $html.='<td><center>';
                $html.='Pre';
            $html.='</center></td>';
            $html.='<td><center>';
                $html.='Corr';
            $html.='</center></td>';
        $html.='</tr>';

   
    foreach ($intervencion as $inter) {
        
        $html.='<tr>';
            $html.='<td>';
                $html.=$inter['fecha_inter'];
            $html.='</td>';
         
        if($inter['pre_inter']==1){
            $html.='<td><center>';
                $html.='x';
            $html.='</center></td>';
            $html.='<td>';
            $html.='</td>';
        }else{
            $html.='<td>';
            $html.='</td>';
            $html.='<td><center>';
                $html.='x';
            $html.='</center></td>';
        }
            $html.='<td colspan="3"  style="width:250px;">';
                $html.=$inter['detalle_inter'];
            $html.='</td>';
            $html.='<td>';
                $html.=$inter['realizado_inter'];
            $html.='</td>';

            $html.='<td>';
                $html.=$inter['valor_inter'];
            $html.='</td>';

        $html.='</tr>';
    }

    $html.='</tbody>';
$html.='</table>';
}
if($remision !=''  && isset($remision)){
$html.='<p>4.Registro de Remision';

$html.='<table border="2"  cellspacing="0" cellpadding="5px" style="width: 100%;" >';
    $html.='<tbody>';
        $html.='<tr>';
            $html.='<td><center>';
                $html.='Fecha';
            $html.='</center></td>';

            $html.='<td  colspan="3"  style="width:250px;"><center>';
                $html.='Detalle';
            $html.='</center></td>';

            $html.='<td><center>';
                $html.='Realizado';
            $html.='</center></td>';

            $html.='<td><center>';
                $html.='Estado';
            $html.='</center></td>';

        $html.='</tr>';
   
    foreach ($remision as $remi) {
        
        $html.='<tr>';
            $html.='<td>';
                $html.=$remi['fecha_remi'];
            $html.='</td>';
       
            $html.='<td colspan="3"  style="width:250px;">';
                $html.=$remi['descripcion_remi'];
            $html.='</td>';

            $html.='<td>';
                $html.=$remi['nombre_despa'];
            $html.='</td>';

            $html.='<td>';
                $html.=$remi['nombre_estado'];
            $html.='</td>';

        $html.='</tr>';
    }

    $html.='</tbody>';
$html.='</table>';
}
if($adjudicacion !=''  && isset($adjudicacion)){
$html.='<p>5.Registro de Adjudicacion';

$html.='<table border="2"  cellspacing="0" cellpadding="5px" style="width: 100%;" >';
    $html.='<tbody>';
        $html.='<tr>';
            $html.='<td><center>';
                $html.='Fecha';
            $html.='</center></td>';

            $html.='<td  colspan="3"  style="width:250px;"><center>';
                $html.='Detalle';
            $html.='</center></td>';

            $html.='<td><center>';
                $html.='Realizado';
            $html.='</center></td>';

            $html.='<td><center>';
                $html.='Valor';
            $html.='</center></td>';

        $html.='</tr>';
           
    foreach ($adjudicacion as $adju) {
        
        $html.='<tr>';
            $html.='<td>';
                $html.=$adju['fecha_entrega'];
            $html.='</td>';
       
            $html.='<td colspan="3"  style="width:250px;">';
                $html.=$adju['descripcion'];
            $html.='</td>';

            $html.='<td>';
                $html.=$empleado[0]['nombre_empleado'];
            $html.='</td>';

            $html.='<td>';
                $html.=$adju['valor'];
            $html.='</td>';

        $html.='</tr>';
    }

    $html.='</tbody>';
$html.='</table>';
}
if($baja !=''  && isset($baja)){
$html.='<p>6.Registro de Baja';

$html.='<table border="2"  cellspacing="0" cellpadding="5px" style="width: 100%;" >';
    $html.='<tbody>';
        $html.='<tr>';
            $html.='<td><center>';
                $html.='Fecha';
            $html.='</center></td>';

            $html.='<td  colspan="3"  style="width:250px;"><center>';
                $html.='Detalle';
            $html.='</center></td>';

            $html.='<td><center>';
                $html.='Realizado';
            $html.='</center></td>';

            $html.='<td><center>';
                $html.='Valor';
            $html.='</center></td>';

        $html.='</tr>';
           
    foreach ($baja as $baj) {
        
        $html.='<tr>';
            $html.='<td>';
                $html.=$baj['fecha_baja'];
            $html.='</td>';
       
            $html.='<td colspan="3"  style="width:250px;">';
                $html.=$baj['descripcion'];
            $html.='</td>';

            $html.='<td>';
                $html.=$empleado[1]['nombre_empleado'];
            $html.='</td>';

            $html.='<td>';
                $html.=$baj['valor'];
            $html.='</td>';

        $html.='</tr>';
    }

    $html.='</tbody>';
$html.='</table>';
}
?>
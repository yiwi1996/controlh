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
    $html.='<tbody>';
$html.='</table>';
$html.='</br>';
$html.='<p>2. Adquisición</p>';
$html.='<table border="2"  cellspacing="0" cellpadding="5px" style="width: 100%;" >';
    $html.='<tbody>';
        $html.='<tr>';
            $html.='<td>';
                $html.='Proveedor :';
            $html.='</td>';

            $html.='<td>';
                $html.='Dirección :';
            $html.='</td>';

            $html.='<td>';
                $html.='Barrio :';
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
                $html.='Contacto :';
            $html.='</td>';

            $html.='<td>';
                $html.='Telefono :';
            $html.='</td>';

            $html.='<td>';
                $html.='Celular :';
            $html.='</td>';

        $html.='</tr>';
    $html.='<tbody>';
$html.='</table>';
$html.='<br>';
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

        $html.='<tr>';
            $html.='<td>';
                $html.='';
            $html.='</td>';

            $html.='<td>';
                $html.='';
            $html.='</td>';

            $html.='<td>';
                $html.='';
            $html.='</td>';

            $html.='<td colspan="3"  style="width:250px;">';
                $html.='';
            $html.='</td>';

            $html.='<td>';
                $html.='';
            $html.='</td>';

            $html.='<td>';
                $html.='';
            $html.='</td>';

        $html.='</tr>';
    $html.='<tbody>';
$html.='</table>';
?>
<?php 
    function datosPersonas($persona)
    {
        $htmlTemp='';
        $i=0;
        foreach($persona as $item)
        {
            $i=$i+1;
            $htmlTemp.=
                        '<tr>'.
                        '<td width="30%">UNIDAD</td>'.
                        '<td>:'.' '. $item->nivel2.' '.$item->nivel4.' '.$item->nivel6.' '.$item->nivel8.' '.$item->nivel10.' '.$item->nivel12.' '.$item->nivel14.' '.
                        '</td>'.
                        '<tr>'.
                        '<td width="30%">GRADO </td>'.
                        '<td >:'.' '. $item->nombrecorto.' '.
                        '</td>'.      
                        '</tr>'.       
                        '<tr>'.
                        '<td width="30%">APELLIDOS Y NOMBRES </td>'.
                        '<td >:'.' '. $item->apellidopaterno.' '.$item->apellidomaterno.' '.$item->nombres.' '.        
                        '</td> '.        
                        '</tr>'.
                        '<tr>'.
                        '<td width="30%">UNIDAD</td>'.
                        ' <td >:'. ' '.$item->nivel2.' '.$item->nivel4.' '.$item->nivel6.' '.$item->nivel8.' '.$item->nivel10.' '.$item->nivel12.' '.$item->nivel14.' '.
                        ' </td> '.     
                        '</tr>	';
                             
            if($i==1)
            break;
        }
        return   $htmlTemp;
    }
?>
<div style="color:red">ORIGINAL</div>
<div style="font-size:16px;">
<center><strong><u>HISTORIAL DE COMISIONES</u></strong></center>
</div>
<br/>
<table  WIDTH="100%" style="font-size:14px; margin-left:35px; border:1px" >
       <?=datosPersonas($historialcomisionpersona);?>
</table>
 <br/>
<table style="font-size:13px; margin-left:35px; border: solid 1px;">
    <thead>
        <tr>
            <th>N° comisión</th>
            <th> Tipo comisión </th>
            <th>Lugar comision</th>
            <th>Motivo</th>
            <th>Disposición</th>
            <th>Fecha salida</th>
            <th>Fecha llegada</th>
            <th>Observación</th>   
        </tr>
    </thead>
    <tbody>
        @foreach($historialcomisionpersona as $item)
            <tr>
                <td>{{$item->numerocomision }}</td>
                <td>{{$item->nombrecomision }}</td>
                <td>{{$item->departamento}}-{{$item->provincia}}-{{$item->distrito}}, {{$item->lugarcomision}}</td>
                <td>{{$item->motivo }}</td>
                <td>{{$item->disposicion }}</td>
                <td>{{$item->fechasalida }}</td>
                <td>{{$item->fechallegada }}</td>
                <td>{{$item->observacion}}</td>
            </tr>
        @endforeach
                
    </tbody>
</table>

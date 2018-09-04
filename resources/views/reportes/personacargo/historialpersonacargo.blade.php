<?php 
    function datosPersona($persona)
    {
        $htmlTemp='';
        $i=0;
        foreach($persona as $item)
        {
            $i=$i+1;
            $htmlTemp.=
                        '<tr>'.
                        '<td width="30%"><strong>NÚMERO DE CIP</strong></td>'.
                        '<td >:'.' '.$item->cip.' '.
                        '</td>'.      
                        '</tr>'.       
                        '<tr>'.
                        '<td width="30%"><strong>APELLIDOS Y NOMBRES</strong></td>'.
                        '<td >:'.' '. $item->apellidopaterno.' '. $item->apellidomaterno.' '.$item->nombres.' '.        
                        '</td> '.        
                        '</tr>'.
                        '<tr>';
                             
            if($i==1)
            break;
        }
        return   $htmlTemp;
    }
?>
<div style="color:red">ORIGINAL</div>
<div style="font-size:16px;">
<center><strong><u>HISTORIAL DE CARGOS</u></strong></center>
</div>
<br/>
<table  WIDTH="100%" style="font-size:14px; margin-left:35px; border:1px" >
       <?=datosPersona($historialpersonacargo);?>
</table>
 <br/>
<div style="font-size:14px; margin-left:50px;">
<table border='1px' style="font-size:14px;">
    <thead>
        <tr  style="background: #EAEAEA;">
            <td>N°</td>
            <td>Código</td>
            <td>Cargo </td>
            <td>Fecha asignacion cargo</td>
            <td>Observacion</td>
        </tr>
    </thead>
    <tbody>
    @foreach($historialpersonacargo as $item)
            <tr>
                <td></td>
                <td>{{$item->codigo}}</td>
                <td WIDTH="50">{{$item->nombrecorto}}</td>
                <td>{{$item->fechaAsignacion}}</td>
                <td>{{$item->observacion}}</td>
            </tr>
    </tbody>
    @endforeach
</table>
</div>

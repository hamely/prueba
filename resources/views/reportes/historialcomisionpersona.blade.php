<div style="font-size:16px;">
<center><strong><u>HISTORIAL DE COMISIONES</u></strong></center>
</div>
<br/>
<table  WIDTH="100%" style="font-size:14px; margin-left:35px; border:1px" >
  
        <tr>
            <td width="30%">GRADO </td>
            <td >:         
            </td>          
        </tr>       
        <tr>
            <td width="30%">NOMBRES Y APELLIDOS</td>
            <td >:           
            </td>          
        </tr>
        <tr>
            <td width="30%">UNIDAD</td>
            <td >:
            </td>          
        </tr>
</table>
 
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

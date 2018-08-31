<h4><center><u><strong>REPORTE DE NÚMERO DE COMISIONES POR UNIDAD</strong></u></center></h4>

<table border="1" style="font-size:10px;">
@foreach($unidad as $item)
<tr>
    <td width="30%">{{$item->nivel2 }} {{$item->nivel4 }} {{$item->nivel6 }} {{$item->nivel8 }} {{$item->nivel10 }} {{$item->nivel12 }} {{$item->nivel14 }}</td>  
    @foreach($comisionunidad as $itemp)
    <td width="30%">{{$itemp->personaid }}</td>
    @endforeach 
</tr>  
@endforeach      
</table>




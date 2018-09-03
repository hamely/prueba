<h4><center><u><strong>CANTIDAD DE PERSONAS QUE SALIERON DE COMISIONES POR UNIDAD</strong></u></center></h4>

<table border="1" style="font-size:12px;">

<tr>
<th>Código</th>
<th>Unidad</th>
<th>Cantidad</th>
</tr>
@foreach($comisionunidad as $item)
<tr>
    <td>{{$item->codigo}}</td>     
    <td>{{$item->nivel2}} {{$item->nivel4}} {{$item->nivel6}} {{$item->nivel8}} {{$item->nivel10}} {{$item->nivel12}} {{$item->nivel14}}</td>
    <td>{{$item->cantidad}}</td>
</tr>  
@endforeach    
</table>


<script type="text/php">
if ( isset($pdf) ) { 
    $pdf->page_script('
        if ($PAGE_COUNT > 1) {
            $font = $fontMetrics->get_font("Arial, Helvetica, sans-serif", "normal");
            $size = 12;
            $pageText = "Página " . $PAGE_NUM . " de " . $PAGE_COUNT;
            $y = 15;
            $x = 735;
            $pdf->text($x, $y, $pageText, $font, $size);
        } 
    ');
}

</script>

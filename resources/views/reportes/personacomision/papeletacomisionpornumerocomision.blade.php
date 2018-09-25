<h4><center><u><strong>CANTIDAD DE PERSONAS QUE SALIERON DE COMISIONES papeleta</strong></u></center></h4>

<table border="1" style="font-size:12px;">

<tr>
<th>NumeroComision</th>
<th>Lugar</th>
</tr>
@foreach($data as $item)
<tr>
    <td>{{$item->numerocomision}}</td>     
    <td>{{$item->lugarcomision}}</td>
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

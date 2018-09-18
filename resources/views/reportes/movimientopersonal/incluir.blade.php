
<table>
    <thead>
    <tr>
        <th>NRO</th>
        <th>CARNET</th>
        <th>APELLIDOS Y NOMBRES</th>
        <th>CÓDIGO UNIDAD</th>
        <th>CÓDIGO CARGO</th>
        <th>CÓDIGO FP/MH</th>
        <th>DOCUMENTO (CON QUE LLEGA A LA UNIDAD)</th>
    </tr>
    </thead>
    <tbody>
    @foreach($data as $item)
        <tr>
            <td></td>
            <td>{{ $item->cip }}</td>
            <td>{{ $item->apellidopaterno }} {{ $item->apellidomaterno }} {{$item->nombres}}</td>
            <td>{{ $item->codigounidad}}</td>
            <td>{{ $item->codigocargo}}</td>
            <td></td>
            <td>{{ $item->nombredocumento}}</td>
        </tr>
    @endforeach
    </tbody>
</table>

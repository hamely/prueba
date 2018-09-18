
<table>
    <thead>
    <tr>
        <th style="background: red;">Name</th>
        <th>Email</th>
    </tr>
    </thead>
    <tbody>
    @foreach($data as $user)
        <tr>
            <td style="color:red;">{{ $user->cip }}</td>
            <td>{{ $user->apellidopaterno }}</td>
        </tr>
    @endforeach
    </tbody>
</table>

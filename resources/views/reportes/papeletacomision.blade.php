<table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Producto</th>
    
            </tr>                            
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->nombre }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
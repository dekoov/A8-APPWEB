<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Resultado de Factura</title>
        <link rel="stylesheet" href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}">
    </head>
    <body>
        <div class="container mt-5">
            <h2 class="text-success mb-4">Resultado de Factura</h2>
            <ul class="list-group">
                <li class="list-group-item">Cliente: <strong>{{ $cliente }}</strong></li>
                <li class="list-group-item">Producto: <strong>{{ $producto }}</strong></li>
                <li class="list-group-item">Cantidad: <strong>{{ $cantidad }}</strong></li>
                <li class="list-group-item">Precio unitario: ${{ number_format($precio, 2) }}</li>
                <li class="list-group-item">Subtotal: ${{ number_format($subtotal, 2) }}</li>
                <li class="list-group-item">IVA ({{ $iva }}%): ${{ number_format($valorIVA, 2) }}</li>
                <li class="list-group-item">Total a pagar: <strong>${{ number_format($total, 2) }}</strong></li>
            </ul>
        </div>
    </body>
</html>


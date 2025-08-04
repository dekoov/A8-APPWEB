<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Factura ATW</title>
        <link rel="stylesheet" href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}">
    </head>
    <body>
        <div class="container mt-4">
            <h1 class="text-primary mb-4">Factura</h1>

            <form action="/factura" method="POST" class="row g-3">
                @csrf

                <div class="col-md-6">
                    <label for="cliente" class="form-label">Nombre del cliente</label>
                    <input type="text" class="form-control" id="cliente" name="cliente" required>
                </div>

                <div class="col-md-6">
                    <label for="producto" class="form-label">Nombre del producto</label>
                    <input type="text" class="form-control" id="producto" name="producto" required>
                </div>

                <div class="col-md-4">
                    <label for="cantidad" class="form-label">Cantidad</label>
                    <input type="number" class="form-control" id="cantidad" name="cantidad" min="1" required>
                </div>

                <div class="col-md-4">
                    <label for="precio" class="form-label">Precio unitario</label>
                    <input type="number" class="form-control" id="precio" name="precio" step="0.01" min="0" required>
                </div>

                <div class="col-md-4">
                    <label for="iva" class="form-label">Porcentaje de IVA (opcional)</label>
                    <input type="number" class="form-control" id="iva" name="iva" step="0.01" min="0">
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-success">Generar Factura</button>
                </div>
            </form>
        </div>
    </body>
</html>

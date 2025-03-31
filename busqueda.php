<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Búsqueda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .search-main {
            font-size: 1.5rem;
            padding: 1rem;
        }
        .search-secondary {
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4 mt-5">Búsqueda</h1>
        <form action="resultados.php" method="get">
            <!-- Búsqueda General -->
            <div class="mb-4">
                <label for="global_search" class="form-label">Búsqueda General:</label>
                <input type="text" name="global_search" id="global_search" class="form-control search-main" placeholder="Ingrese cualquier texto o número">
            </div>

            <!-- Campos secundarios -->
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label for="name" class="form-label search-secondary">Número</label>
                    <input type="text" name="name" id="name" class="form-control search-secondary" placeholder="Número del instrumento">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="instrumento" class="form-label search-secondary">Instrumento:</label>
                    <select name="instrumento" id="instrumento" class="form-select search-secondary">
                        <option value="">Seleccione un instrumento</option>
                        <option value="Ordenanza">Ordenanza</option>
                        <option value="Resolucion">Resolución</option>
                        <option value="Declaracion">Declaración</option>
                        <option value="Comunicacion">Comunicación</option>
                    </select>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="year" class="form-label search-secondary">Año:</label>
                    <select name="year" id="year" class="form-select search-secondary">
                        <option value="">Seleccione un año</option>
                        <?php
                        // Generar una lista de años desde 1973 hasta el año actual
                        $currentYear = date('Y');
                        for ($year = 1973; $year <= $currentYear; $year++) {
                            echo "<option value=\"$year\">$year</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Buscar</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
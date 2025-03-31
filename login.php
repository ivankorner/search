<?php if (isset($_SESSION['error'])): ?>
    <div class="alert alert-danger mt-3">
        <?php 
        echo $_SESSION['error']; 
        unset($_SESSION['error']); // Elimina el mensaje después de mostrarlo
        ?>
    </div>
<?php endif; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Iniciar Sesión</h1>
        <form action="process_login.php" method="post">
            <div class="mb-3">
                <label for="username" class="form-label">Usuario:</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Ingrese su usuario" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña:</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Ingrese su contraseña" required>
            </div>
            <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Reservas de Habitaciones</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Sistema de Reservas de Habitaciones</h1>
    </header>

    <main>
        <section class="search-form">
            <!-- Formulario para seleccionar fechas -->
            <form action="buscar-habitaciones.php" method="post">
                <label for="check-in">Fecha de Check-in:</label>
                <input type="date" id="check-in" name="check-in" required>

                <label for="check-out">Fecha de Check-out:</label>
                <input type="date" id="check-out" name="check-out" required>

                <label for="num-habitaciones">Número de Habitaciones:</label>
                <input type="number" id="num-habitaciones" name="num-habitaciones" min="1" required>

                <label for="num-huespedes">Número de Huéspedes:</label>
                <input type="number" id="num-huespedes" name="num-huespedes" min="1" required>

                <button type="submit">Buscar Habitaciones</button>
            </form>
        </section>

        <section class="room-list">
            <!-- Lista de habitaciones disponibles -->
            <!-- Aquí se mostrarán las habitaciones con su información -->
        </section>
    </main>

    <footer>
        <p>© 2024 Hotel Reservas S.A.</p>
    </footer>
</body>
</html>

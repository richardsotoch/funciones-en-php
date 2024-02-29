<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba de Funciones de Fecha y Hora</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Prueba de Funciones de Fecha y Hora</h1>

        <div class="datetime-section">
            <h2>Fecha y Hora Actual</h2>
            <?php
            date_default_timezone_set('America/Lima');
            echo "<p>Fecha actual: " . date("d-m-Y H:i:s") . "</p>";
            ?>
            <p>Marca de tiempo actual: <?php echo time(); ?></p>
        </div>

        <div class="date-validation-section">
            <h2>Validación de Fecha</h2>
            <form method="post" action="4. Funciones-de-fecha-y-hora.php">
                <label for="year">Año:</label>
                <input type="text" id="year" name="year" required>

                <label for="month">Mes:</label>
                <input type="text" id="month" name="month" required>

                <label for="day">Día:</label>
                <input type="text" id="day" name="day" required>

                <button type="submit" name="checkDate">Verificar Fecha</button>
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["checkDate"])) {
                $year = $_POST["year"];
                $month = $_POST["month"];
                $day = $_POST["day"];

                if (checkdate($month, $day, $year)) {
                    echo "<p class='success'>La fecha ingresada es válida.</p>";
                } else {
                    echo "<p class='error'>La fecha ingresada no es válida.</p>";
                }
            }
            ?>
        </div>

    </div>
</body>
</html>


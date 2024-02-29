<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba de Funciones Numéricas</title>
</head>
<body>
    <h1>Prueba de Funciones Numéricas</h1>

    <form method="post" action="3. Funciones-numéricas.php">
        <label for="number">Ingrese un número:</label>
        <input type="text" id="number" name="number" required>
        <button type="submit" name="submit">Realizar cálculos</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
        $inputValue = $_POST["number"];
        $numericValue = floatval($inputValue);

        // Verificar si la conversión a float fue exitosa
        if (is_numeric($numericValue)) {
            echo "<div>";
            echo "<p>Función exp: " . exp($numericValue) . "</p>";
            echo "<p>Función floor: " . floor($numericValue) . "</p>";
            echo "<p>Función abs: " . abs($numericValue) . "</p>";
            echo "<p>Función ceil: " . ceil($numericValue) . "</p>";
            echo "<p>Función getrandmax: " . rand(0, $numericValue) . "</p>";
            echo "<p>Función max: " . max($numericValue, 10, -5) . "</p>";
            echo "<p>Función min: " . min($numericValue, 10, -5) . "</p>";
            echo "<p>Función mt_rand: " . mt_rand(0, $numericValue) . "</p>";
            echo "<p>Función pi: " . pi() . "</p>";
            echo "<p>Función pow: " . pow($numericValue, 2) . "</p>";
            echo "<p>Función round: " . round($numericValue) . "</p>";
            echo "<p>Función sqrt: " . sqrt(abs($numericValue)) . "</p>";
            echo "</div>";
        } else {
            echo "<p>Por favor, ingrese un número válido.</p>";
        }
    }
    ?>
</body>
</html>









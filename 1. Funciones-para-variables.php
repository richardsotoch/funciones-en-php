<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones para Variables</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        input, button {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h1>Funciones para Variables</h1>

    <form method="post">
        <label for="inputVariable">Ingresa una variable:</label>
        <input type="text" name="inputVariable" required>

        <button type="submit" name="function" value="isset">isset</button>
        <button type="submit" name="function" value="unset">unset</button>
        <button type="submit" name="function" value="gettype">gettype</button>
        <button type="submit" name="function" value="settype">settype</button>
        <button type="submit" name="function" value="empty">empty</button>
        <button type="submit" name="function" value="is_integer">is_integer</button>
        <button type="submit" name="function" value="is_double">is_double</button>
        <button type="submit" name="function" value="is_string">is_string</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $variable = $_POST["inputVariable"];
        $selectedFunction = $_POST["function"];

        switch ($selectedFunction) {
            case 'isset':
                echo "<p>isset: " . (custom_isset($variable) ? "true" : "false") . "</p>";
                break;
            case 'unset':
                custom_unset($variable);
                echo "<p>unset: Variable eliminada</p>";
                break;
            case 'gettype':
                echo "<p>gettype: " . custom_gettype($variable) . "</p>";
                break;
            case 'settype':
                custom_settype($variable, 'integer');
                echo "<p>settype: Tipo de variable cambiado a entero</p>";
                break;
            case 'empty':
                echo "<p>empty: " . (custom_empty($variable) ? "true" : "false") . "</p>";
                break;
            case 'is_integer':
                echo "<p>is_integer: " . (custom_is_integer($variable) ? "true" : "false") . "</p>";
                break;
            case 'is_double':
                echo "<p>is_double: " . (custom_is_double($variable) ? "true" : "false") . "</p>";
                break;
            case 'is_string':
                echo "<p>is_string: " . (custom_is_string($variable) ? "true" : "false") . "</p>";
                break;
            default:
                break;
        }
    }

    function custom_isset($variable) {
        return isset($variable);
    }

    function custom_unset(&$variable) {
        unset($variable);
    }

    function custom_gettype($variable) {
        return gettype($variable);
    }

    function custom_settype(&$variable, $tipo) {
        settype($variable, $tipo);
    }

    function custom_empty($variable) {
        return empty($variable);
    }

    function custom_is_integer($variable) {
        return is_integer($variable);
    }

    function custom_is_double($variable) {
        return is_double($variable);
    }

    function custom_is_string($variable) {
        return is_string($variable);
    }
    ?>
</body>
</html>

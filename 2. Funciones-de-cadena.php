<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones de Cadena</title>
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
    <h1>Funciones de Cadena</h1>

    <form method="post">
        <label for="inputString">Ingresa una cadena:</label>
        <input type="text" name="inputString" required>

        <button type="submit" name="function" value="strlen">strlen</button>
        <button type="submit" name="function" value="strpos">strpos</button>
        <button type="submit" name="function" value="strcmp">strcmp</button>
        <button type="submit" name="function" value="strstr">strstr</button>
        <button type="submit" name="function" value="substr">substr</button>
        <button type="submit" name="function" value="trim">trim</button>
        <button type="submit" name="function" value="str_replace">str_replace</button>
        <button type="submit" name="function" value="strtolower">strtolower</button>
        <button type="submit" name="function" value="strtoupper">strtoupper</button>
        <button type="submit" name="function" value="preg_match">preg_match</button>
        <button type="submit" name="function" value="explode">explode</button>
        <button type="submit" name="function" value="strrev">strrev</button>
        <button type="submit" name="function" value="str_repeat">str_repeat</button>
        <button type="submit" name="function" value="str_pad">str_pad</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputString = $_POST["inputString"];
        $selectedFunction = $_POST["function"];

        switch ($selectedFunction) {
            case 'strlen':
                echo "<p>strlen: " . strlen($inputString) . "</p>";
                break;
            case 'strpos':
                echo "<p>strpos: " . strpos($inputString, 'a') . "</p>";
                break;
            case 'strcmp':
                $compareString = "Hello, world!";
                echo "<p>strcmp: " . strcmp($inputString, $compareString) . "</p>";
                break;
            case 'strstr':
                echo "<p>strstr: " . strstr($inputString, 'world') . "</p>";
                break;
            case 'substr':
                echo "<p>substr: " . substr($inputString, 0, 5) . "</p>";
                break;
            case 'trim':
                echo "<p>trim: " . trim($inputString) . "</p>";
                break;
            case 'str_replace':
                $replaceString = "PHP";
                echo "<p>str_replace: " . str_replace('Java', $replaceString, $inputString) . "</p>";
                break;
            case 'strtolower':
                echo "<p>strtolower: " . strtolower($inputString) . "</p>";
                break;
            case 'strtoupper':
                echo "<p>strtoupper: " . strtoupper($inputString) . "</p>";
                break;
            case 'preg_match':
                $pattern = "/^[0-9]+$/";
                echo "<p>preg_match: " . (preg_match($pattern, $inputString) ? "true" : "false") . "</p>";
                break;
            case 'explode':
                $delimiter = ",";
                $explodedArray = explode($delimiter, $inputString);
                echo "<p>explode: " . implode(", ", $explodedArray) . "</p>";
                break;
            case 'strrev':
                echo "<p>strrev: " . strrev($inputString) . "</p>";
                break;
            case 'str_repeat':
                echo "<p>str_repeat: " . str_repeat($inputString, 2) . "</p>";
                break;
            case 'str_pad':
                echo "<p>str_pad: " . str_pad($inputString, 20, "*", STR_PAD_BOTH) . "</p>";
                break;
            default:
                break;
        }
    }
    ?>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora en PHP</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style>
        
    </style>
</head>
<body>

<nav class="nav-extended purple">
    <div class="nav-content">
        <ul class="tabs tabs-transparent">
            <li class="tab"><a href="index.php">Inicio</a></li>
            <li class="tab"><a href="acerca.php">Acerca de</a></li>
            <li class="tab"><a href="servicios.php">Servicios</a></li>
            <li class="tab"><a href="contactanos.php">Contáctanos</a></li>
            <li class="tab"><a href="calculadora.php">Calculadora</a></li>
        </ul>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col m4">

        </div>
        <div class="col m8" id="inicio">
            <h3>Calculadora</h3>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <input type="text" name="num1" placeholder="Número 1" required>
                <select name="operator" required>
                    <option value="" disabled selected>Elige una operación</option>
                    <option value="+">Suma</option>
                    <option value="-">Resta</option>
                    <option value="*">Multiplicación</option>
                    <option value="/">División</option>
                </select>
                <input type="text" name="num2" placeholder="Número 2" required>
                <input type="submit" name="calculate" value="Calcular">
            </form>
            <?php
            if (isset($_POST['calculate'])) {
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $operator = $_POST['operator'];

                switch ($operator) {
                    case '+':
                        $result = $num1 + $num2;
                        break;
                    case '-':
                        $result = $num1 - $num2;
                        break;
                    case '*':
                        $result = $num1 * $num2;
                        break;
                    case '/':
                        if ($num2 != 0) {
                            $result = $num1 / $num2;
                        } else {
                            $result = "Error: División entre cero no está permitida.";
                        }
                        break;
                    default:
                        $result = "Operador inválido";
                }
            }
            ?>
            <?php if (isset($result)) : ?>
                <h2>Resultado: <?php echo $result; ?></h2>
            <?php endif; ?>
        </div>
    </div>
</div>

<footer class="page-footer">
    
</footer>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
    $(document).ready(function(){
        $('select').formSelect();
    });
</script>

</body>
</html>

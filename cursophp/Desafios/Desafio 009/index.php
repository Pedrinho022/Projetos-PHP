<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio PHP</title>
</head>
<body>
    <?php 
    //Área de declarações
    $valor1 = $_GET['val1'] ?? '';
    $peso1 = $_GET['pes1'] ?? '';
    $valor2 = $_GET['val2'] ?? '';
    $peso2 = $_GET['pes2'] ?? '';
    
    ?>
    <main>
        <h1>Médias Aritméticas:</h1>
        <form  action="<?=$_SERVER['PHP_SELF']?>" method="get"> 
            <label for="val1">1º Valor:</label>
            <input type="number" name="val1" id="val1" value="<?=$valor1?>">
            <label for="val1">1º Peso:</label>
            <input type="number" name="pes1" id="pes1" value="<?=$peso1?>">
            <label for="val1">2º Valor:</label>
            <input type="number" name="val2" id="val2" value="<?=$valor2?>">
            <label for="val1">2º Peso:</label>
            <input type="number" name="pes2" id="pes2" value="<?=$peso2?>">
            <input type="submit" value="Cálcular Médias">
        </form>
        
    </main>
    <section>
        <h2>Cálculos das Média:</h2>
        <?php 
        $mas = ($valor1 + $valor2) / 2;
        // $mas = média aritmética simples 
        $map = ($valor1 * $peso1 + $valor2 * $peso2) / ($peso1 + $peso2);
        // $map = média aritmética ponderada
        echo "<p>Analizando os valores <strong>$valor1</strong> e <strong>$valor2</strong>:</p>";
        echo "<p><ul><li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a: <strong>$mas</strong></li>";
        echo "<p><li> A <strong>Média Aritmética Ponderada</strong> com pesos <strong>$peso1</strong> e <strong>$peso2</strong> é igual a: <strong>$map</strong></li></p>";
        ?>
    </section>

</body>
</html>
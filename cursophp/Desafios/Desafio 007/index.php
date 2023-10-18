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
        $minimo = 1_380.60;
        $salario = $_GET['sal'] ?? $minimo;
    ?>

    <main>
        <h1>Infrome seu salário:</h1>

        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Salário (R$):</label>
            <input type="number" name="sal" id="sal" min="0" value="<?=$salario?>" step="0.01">
            <p>Considerando o salário mínimo de <strong>R$<?=number_format($minimo, 2, ",", ".")?></strong></p>
           
            <input type="submit" value="Converter">
        </form>
        <section>
            <h2>Resultado final:</h2>
            <?php 
                $total =  intdiv($salario, $minimo);
                $dif = $salario % $minimo;
                
                echo "<p>Quem recebe um salario de <strong> R$:". number_format($salario, 2, ",", ".")."</strong> ganha <strong>$total salários mínimos</strong> + <strong>R$ ". number_format($dif, 2, ",", ".")."</strong></p>";

            ?>



        </section>
    </main>
    
</body>
</html>
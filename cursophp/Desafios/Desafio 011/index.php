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
         $precopro = $_GET['preco'] ?? '0';
         // $precopre = preço do prouto
         $porcentagem = $_GET['reaj'] ?? 0;
         // $porcentagem = valor da porcentagem 
    ?>
    <main>
        <h1>Reajustador de Preços:</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="preco" min="0.10" step="0.01" value="<?=$precopro?>">

            <label for="reaj">Qual será o percentual de reajuste? (<strong><span id="p">?</span>%</strong>)</label>
            <input type="range" name="reaj" id="reaj" min="0" max="100" step="1" oninput="mudavalor()" value="<?=$porcentagem?>">
            <input type="submit" value="Reajustar">
        </form>
    </main>
    <section>
            <h2>Resultado do Reajuste:</h2>
            <?php 
                $reajuste = ($precopro * $porcentagem) / 100;
                //$reajuste = É o calcúlo da porcentagem
                $novopre = $precopro + $reajuste;
                // $novopre = o valor do produto + o valor da porcentagem 

            echo "<p>O produto que cutava <strong>R$:". number_format($precopro, 2, ",", ".")." </strong> com <strong>$porcentagem% de aumento</strong> vai passar a custar <strong>R$:". number_format($novopre, 2, ",", ".")." </strong> a partir de agora</p>"
            ?>
    </section>
    <script>
        // Declarações automáticas 
        mudavalor()

        function mudavalor() {
            p.innerText = reaj.value;
        }
    </script>
</body>
</html>
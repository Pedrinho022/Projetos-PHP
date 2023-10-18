<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <style> 
        img.nota {
            height: 50px;
            margin: 5px;
        }
    </style>
    <title>Desafio PHP</title>
</head>
<body>
    <?php 
        $n = $_GET['num'] ?? 5;
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="num">Qual valor você deseja sacar? (R$) <sup>*</sup></label>
            <input type="number" name="num" id="num" min="5" step="5" value="<?=number_format($n, 2, ",", ".")?>">
            <p style="font-size: 0.7em;"><sup>*</sup> Notas disponiveis: R$100, R$50, R$10, R$5
            <input type="submit" value="Sacar">
        </form>
    </main>
    <?php 
        $saque = $n;

        $resto = $saque;
        //saque de 100
        $tot100 = floor($resto / 100);
        $resto = $resto % 100;
        //Saque de 50
        $tot50 = floor($resto / 50);
        $resto = $resto % 50;
        // saque de 10
        $tot10 = floor($resto / 10);
        $resto = $resto % 10;
        // Saque de 5
        $tot5 = floor($resto / 5);
        $resto = $resto % 5;    
    ?>
    <section>
        <h2>Saque de R$ <?=number_format($n, 2, ",", ".")?> realizado</h2>
        <p>O caixa eletronico vai te entregar as seguintes notas:</p>
        <ul>
            <li><img src="../Desafio 013/src/imagem/100-reais.jpg" alt="Nota de R$100," class="nota"> <?=$tot100?> </li>
            <li><img src="../Desafio 013/src/imagem/50-reais.jpg" alt="Nota de R$50," class="nota">  <?=$tot50?></li>
            <li><img src="../Desafio 013/src/imagem/10-reais.jpg" alt="Nota de R$10," class="nota">  <?=$tot10?></li>
            <li><img src="../Desafio 013/src/imagem/5-reais.jpg" alt="Nota de R$5" class="nota">  <?=$tot5?></li>  
        </ul>
    </section>
</body>
</html>
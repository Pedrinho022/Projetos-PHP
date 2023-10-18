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
        $atual = date("Y");
        // $atual = variavel para não ficar em branco no campo ano atual.
        $dnasci = $_GET['nascimento']??'';
        // $dnasci = data de nascimento
        $anoatual = $_GET['anatual'] ?? '$atual';
        // $anoatual = ano atual
    
    ?>
    <main>
        <h1>Calculando a sua idade:</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="nascimento">Em que ano você nasceu?</label>
        <input type="number" name="nascimento" id="nascimento" max="2023" value="<?=$dnasci?>">
        <label for="nascimento"><p>Quer saber sua idade em qual ano? atualmente estamos em <strong><?=$atual?>:</strong></p></label>
        <input type="number" name="anatual" id="anatual" value="<?=$anoatual?>">
        <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section>
        <h2>Resultado:</h2>
        <?php 
            $idade = ($anoatual - $dnasci);
        
            echo "<p>Quem nasceu no ano de <strong>$dnasci</strong> vai ter <strong>$idade anos</strong> em <strong>$anoatual</strong> </p>";
        ?>
    </section>
</body>
</html>
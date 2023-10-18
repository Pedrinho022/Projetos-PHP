<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>

    <main>
        <h1>Resultado Final</h1>
        <?php 
         $num = $_GET["numero"] ?? 0;
         echo " <p> O número escolhido foi : $num <br> </p>";
         echo " O seu antecessor é: " . $num-1;  echo "<br> <br>";
         echo " O seu sucessor é: " . $num+1; echo "<br> <br>";
        ?>
        <button onclick="javascript:history.go(-1)">&#x2B05;Voltar</button>

    </main>
    
</body>
</html>
    

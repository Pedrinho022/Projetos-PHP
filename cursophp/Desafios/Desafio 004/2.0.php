<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas 2.0</h1>
        <?php 
            //cotação vinda da api di banco central
            $inico = date("m-d-y", strtotime("-7 days"));
            $fim = date("m-d-Y");

            $url ='https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio . '\'&@dataFinalCotacao=\'' . $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao' ;

            $dados = json_decode(file_get_contents($url), true);

            //var_dump($dados);

            $cotacao = $dados["value"][0]["cotacaoCompra"];

            $real = $_GET["din"] ?? 0;

            //Equivalência em Dólar 
            $dolar = $real / $cotacao;

            // Mostrar o resultado 
            // echo "Seus R\$" . number_format($real, 2, ",", ".") . " equivalem a US\$" . number_format(%dolar, 2, ",", ".");

            //Formatação de moedas com internacionalizaçlão! 
            // Biblioteca intl (internallization PHP)

            $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

            echo "<p>Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD") . "</strong></p>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
    
</body>
</html>
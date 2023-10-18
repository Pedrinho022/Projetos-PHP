<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos em PHP</title>
</head>
<body>
    <h1>Testes de tipos primitivos</h1>
    <?php 

    $num = (string) 58;
    echo " A sua variável é $num";
    var_dump($num);
    // 0x = hexadecimal | 0b = binário  | 0 = octal
    
    //  $num = 010;
    //  echo "O valor da variável é $num";

    // $v = "Pedro";
    //  var_dump($v);

    //  $num = 3e2;// 3 x 10(2)
    //  echo "O valor é $num";

    //  $num = (int) 3e2; //(coerção)
    //  var_dump($num);
    
    // $num = (float) "950";
    // var_dump($num);

    // $casado = false;
    //var_dump($casado);
    // print "O valor para casado é $casado"; // o valor (false) no PHP dentro do echo ou print é vazio, então se a variável for boleana e tiver com valor falso(false) ele vai mostrar vazio, se for verdadeiro(true) ele vai mostrar o número 1, no caso do PHP true (boleano)é 1, false(boleano) é vazio.
    
    //  $vet = [6, "Pedro", 9, 3, 5];
    //  var_dump($vet)

    //  class Pessoa {
        //  private string $nome;
    //  }

    // $p = new Pessoa;
    //  var_dump($p);
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em php</title>
</head>

<body>
    <h1>Teste de tipos primitivos.</h1>
    <p>Valor 300 tipo inteiro.</p>
    <?php
// 0x = hexadecimal 0b = binario 0 = Octal
//$num = 010;
//echo "O valor da Variável é $num";

//$v = "edilson";
//var_dump($v);

// $num = 3e2;// 3x 10(2)
//echo "O valor é $num";

// $num = (integer) 3e2; // 3x 10(2) coerção
// echo "O valor é $num";
// var_dump($num);

// $num = (int)"950";
// var_dump($num);

// $casado = true;
// // var_dump($casado);
// print "O valor para casado é $casasdo";

// $vet = [6, 2.5, "Maria", 3, false];
// var_dump($vet);


//Tipos primitivos que não são escalares

class Pessoa{
    private string $nome;
}
$p = new pessoa;
var_dump($p);
?>

</body>

</html>
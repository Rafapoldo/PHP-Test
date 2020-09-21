<?php
 
// a) Validar a variável: $variavel = 198;

 
 $variavel = 198;

 if($variavel >= 0){
     echo 'Variavel existe e tem o valor de: '.$variavel;
 } else {
     echo 'Variavel não existe';
 }
 echo "<br/>".'Variavel do tipo: ';
 var_dump($variavel);




// b) Validar o array e o indice “endereco”:

// $variavel = [ “nome” => “Pedro Luiz”, “endereco” => “Av Taquara”, “telefone” => “(51) 5151-51511” ]; 






 $variavel2 = [ "nome" => "Pedro Luiz", 
            "endereco" => "Av Taquara", 
            "telefone" => "(51) 5151-51511" ];


echo  is_array($variavel2) ? 'Array' : 'not an Array';



$endereço = $variavel2["endereco"];

echo "<br/>".'Pedro Luis mora na rua: '.$endereço.', '.$variavel;




// c) Validar a variável: $variavel = “Romarinho”;

$variavel3 = 'Romarinho';

if (is_string($variavel3)) {
    echo "<br/>"."É uma string";
   } else {
    echo "<br/>"."Não é uma string";
   }




?>
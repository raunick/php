<?php 
   //digite sua altura na varial "a"
   $a = 1.75;
   //digite seu peso na varial "p"
   $p = 69;
   //calculo do IMC
   $calculo = $p/($a*$a);


//tratamento de saida de casas decimais   
echo $IMC = number_format($calculo,0,',','');


//condições
if ($IMC < "18") {
    echo " ----> Abaixo do peso";
} 
elseif ($IMC < "25") {
    echo " ----> Peso ideal";
} 
else {
    echo " ----> Acima do peso";
}
<?php 
   //digite sua altura na varial "a"
   $a = 1.75;
   //digite seu peso na varial "p"
   $p = 75;
   //calculo do IMC
   $calculo = $p/($a*$a);

//tratamento de saida de casas decimais   
echo $IMC = number_format($calculo,1,',','');

if ($IMC < "18.5") {
    echo " ----> abaixo do peso";
} 
elseif ($IMC < "25.5") {
    echo " ----> peso ideal";
} 
else {
    echo " ----> acima do peso";
}
?>

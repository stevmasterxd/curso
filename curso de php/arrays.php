<?php
//indexados
$week[] = "Monday";
$week[] = "Tuesday";
$week[] = "Wednesday";
echo $week[0] ."\n" . $week[1] ."\n". $week[2] ."\n";
$week = array ("Monday" , "Tuesday" , "Wednesday" , "thursday");
echo $week[3] ."\n";
//asociativo
$date = array("name" => "Juan" , "surname"=> "Gomez" , "age" => 26);
echo $date["surname"] ."\n";
//$date = "hola";
if (is_array ($date)) {
    echo "Es un array" ."\n";
}
else{
    echo "No es un array"."\n";
}
//recorrer array asociativo
foreach ($date as $key => $val){
    echo "a $key le corresponde $val"."\n";
}
//recorrer array indexado
$week[] = "Monday";
$week[] = "Tuesday";
$week[] = "Wednesday";
$week[] = "thursday";
for ($i= 0; $i < count($week); $i++) {
  echo $week [$i]."\n"; 
}
//agregar un elemento
$week[] = "Friday";
for ($i= 0; $i < count($week); $i++) {
    echo $week[$i]."\n";
}
<?php
ini_set('declare(strict_types', '1');
function calcularImpuesto(float $basePrice, float $taxPercentage): float
{
   return $basePrice * ($taxPercentage / 100);
    
}
//echo (calcularImpuesto("12.6" , "1.60")).  "\n";

function calculateDiscount(float $basePrice, float $discountPercentage): float
{
    return $basePrice * ($discountPercentage / 100);  
}
//echo (calculateDiscount("12.6" , "1.10")) .  "\n";

function calculateTotal(float $basePrice , float $taxPercentage , float $discountPercentage) : float
{
    $tax = calcularImpuesto($basePrice , $taxPercentage);
    //tax = 45.88
    $discount = calculateDiscount ($basePrice, $discountPercentage);
    //discount =44.94
    return ($basePrice - $discount) + $tax;
}
//echo "total page: " . calcularImpuesto(45.3 , 1.30) .  "\n";
echo "total page: " . calculateTotal (45.3 , 1.30 , 0.80) .  "\n";

/*function main() 
{
    $baseprice = (float)readline("Introduce el precio base del producto: ");
    $taxpercentage = (float)readline("Introduce el porcentaje de impuesto: ");
    $discountpercentage = (float)readline("Introduce el porcentaje de descuento: ");
    
    $totalprice = calculateTotal($$baseprice, $taxpercentage, $discountpercentage);
echo "El total a pagar es: " . number_format($totalprice, 2) . "\n";
}

main();*/


/*Ejercicio Secuencial 4: (Cálculo de impuestos y descuentos)

Desarrolla un programa que calcule el total a pagar por un producto, aplicando impuestos y descuentos. Todas las funciones deben trabajar juntas para hacer el cálculo completo.

Función calcularImpuesto: Recibe un precio base y un porcentaje de impuesto, y devuelve el precio con el impuesto aplicado.

Función calcularDescuento: Recibe  un (precio base y un porcentaje de descuento), y (devuelve el precio con el descuento aplicado).

Función calcularTotal: Recibe (el precio base, el porcentaje de impuesto y el porcentaje de descuento), llama a las funciones anteriores, y devuelve el precio total a pagar.

Crea una función principal que pida al usuario el precio base, el porcentaje de impuesto y el porcentaje de descuento, y luego muestre el total a pagar usando las funciones anteriores.*/

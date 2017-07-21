<?php

// function calculator($a, $b, $sign)
// {
// 	if (is_numeric($a) && is_numeric($b)){

// 	    if ($sign == "+")
// 	    {	
// 	        echo number_format(($a + $b),2);
// 	    }
// 	    elseif ($sign == "-")
// 	    {
// 	        echo number_format(($a - $b),2);
// 	    }
// 	    elseif ($sign == "*")
// 	    {
// 	        echo number_format(($a * $b),2);
// 	    }
// 	    elseif ($sign == "/")
// 	    {
// 	        echo number_format(($a / $b),2);
// 	    }
// 		else {echo "unknown value";}
// 	}
  
//     else {echo "unknown value";}
// }

// calculator(2, 5, "-");

// fonction de calcul du prix d'essence en fct de promo par 2litres achetés (fct codewars)
function fuel_price($litres, $price_per_liter) 
{
   if ($litres < 0 || $price_per_liter < 0)
   {
     echo 'pas de valeurs négatives svp';
   }
   
   	elseif (is_numeric($litres) && is_numeric($price_per_liter)) {
   		# code...
   	

		   if ($litres < 2)
		   {
		     $fuelPrice = $litres * $price_per_liter;
		     echo $finalPrice = number_format($fuelPrice, 16);
		   }  
		   elseif ($litres >=2 && $litres <4)
		   {
		     $fuelPrice = ($litres * $price_per_liter) - (0.05*$litres);
		     echo $finalPrice = number_format($fuelPrice, 16);
		   }
		   elseif ($litres >=4 && $litres < 6)
		   {
		     $fuelPrice = ($litres * $price_per_liter) - (0.1*$litres);
		     echo $finalPrice = number_format($fuelPrice, 16);
		   }
		   elseif ($litres >=6 && $litres < 8)
		   {
		     $fuelPrice = ($litres * $price_per_liter) - (0.15*$litres);
		     echo $finalPrice = number_format($fuelPrice, 16);
		   }
		   elseif ($litres >=8 && $litres < 10)
		   {
		     $fuelPrice = ($litres * $price_per_liter) - (0.20*$litres);
		     echo $finalPrice = number_format($fuelPrice, 16);
		   }
		   else
		   {
		     $fuelPrice = ($litres* $price_per_liter) - (0.25*$litres);
		     echo $finalPrice = number_format($fuelPrice, 16);
		   }
	   }
 }
fuel_price(5, 1.23);

//fonction supprimant les espaces avant et après une chaine de caractères sans utiliser trim de php !
// function deleteSpace(string $chaine)
//     {
//         // Implémenter une fonction trim (sans utiliser la fonction trim de php, pas le ltrim ni de rtrim...)
//         $divide = explode(' ',$chaine);
        
//         foreach ($divide as $key => $value)
//         {        	
//         	if (empty($value)){
//         		unset($divide[$key]);
//         	}
        	
//         }
//         $fuuusion = implode(' ', $divide);
//         echo $fuuusion;   
        
//     }

// deleteSpace ('      Une chaine contenant des espaces avant et après        ');
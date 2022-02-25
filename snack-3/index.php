<?php

$number_list = [];

do {
   $rand_number = rand(1,10);
   if (in_array($rand_number, $number_list)){
       $number_list[] = $rand_number;
   }
} while (count($number_list) <= 15)


?>
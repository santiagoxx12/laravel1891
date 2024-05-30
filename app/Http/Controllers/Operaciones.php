<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Psy\Readline\Hoa\Readline;

class Operaciones extends Controller
{
    public function function($num1,$num2){
        return $num1+$num2;
    }
    public function primos($num1){
     $cont=0;
     for($k=1;$k<=$num1;$k++){

        if($num1 % $k==0){
            $cont++;
        }
     }
     if($cont==2){
        return 'es primo';
     }
     else{
        return 'no es primo';

     }
    }

    
    public function numerosAmigos($num2,$suma=0){

     for($k=1;$k<=($num2/2);$k++){

        if($num2 % $k==0){
            $suma=$suma + $k;
            return $suma;    
        }
     
        }
        
    }
    

    

    
}
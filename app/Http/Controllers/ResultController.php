<?php

namespace App\Http\Controllers;
use App\Models\result;
use Illuminate\Http\Request;

class ResultController extends Controller
{    

    public function formularioCuadratica(){
        return view('frm_Cuadratica');
       
    }

    public function cuadraticStore(Request $request){

        $cuadratica =new result();
        $a=$request->input('a');
        $b=$request->input('b');
        $c=$request->input('c');
        $p1=($b*$b)-(4*$a*$c);

        if($a!=0 && $p1>=0){
            $p2=sqrt($p1);
            $x1=(-$b+$p2)/2*$a;
            $x2=(-$b-$p2)/2*$a;

            Result::create([
                'a'=>$a,
                'b'=>$b,
                'c'=>$c,
                'x1'=>$x1,
                'x2'=>$x2,
            ]);
            echo'el resultado x1 es: '.$x1;
            echo'el rtesultado x2 es: '.$x2;
         }  else{
            echo'ingrese valores validos';
        
            Result::create([
                'a'=>$a,
                'b'=>$b,
                'c'=>$c,
                'x1'=>0,
                'x2'=>0,
            ]);

         }
     }
}
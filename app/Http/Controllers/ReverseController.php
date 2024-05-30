<?php

namespace App\Http\Controllers;

use App\Models\Reverse;
use Illuminate\Http\Request;

class ReverseController extends Controller
{
    public function reverse(){
        return view('frm_prase');
    }
}

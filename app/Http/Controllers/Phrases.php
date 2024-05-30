<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;

class Phrases extends Controller

    {
       use HasFactory;
       protected $fillable = [  'frase','invertida'];
      
    }
    

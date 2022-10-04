<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    public function lista(){
        return (object)[
            'nome'=>'Ramon',
            'tel'=>'21977053242'
        ];
    }
    use HasFactory;
}

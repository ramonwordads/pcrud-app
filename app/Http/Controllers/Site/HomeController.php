<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Models\Curso;
class HomeController extends Controller
{
    public function index(){

        $cursos = Curso::paginate(6);
        return view('home',compact('cursos'));
        
    }
}

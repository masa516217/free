<?php

declare(strict_types=1);
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\GenreController;

class GenreController extends Controller
{
    //
    public function horror()
    {
        return view('mockup.Genre.horror');
    }
    
    public function RPG()
    {
        return view('mockup.Genre.RPG');
    }
    
    public function action()
    {
        return view('mockup.Genre.action');
    }
    public function puzzle()
    {
        return view('mockup.Genre.puzzle');
    }
}

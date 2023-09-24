<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    //
    public function main()
    {
        return view('mockup.main');
    }
    
    public function game()
    {
        return view('mockup.game');
    }
    
    public function sarch()
    {
        return view('mockup.sarch');
    }
}

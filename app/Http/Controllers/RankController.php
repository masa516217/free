<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\RankController;

class RankController extends Controller
{
    //
    public function today()
    {
        return view('mockup.Rank.day');
    }
    
    public function week()
    {
        return view('mockup.Rank.week');
    }
    
    public function total()
    {
        return view('mockup.Rank.total');
    }
}

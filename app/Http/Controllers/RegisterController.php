<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\RegisterController;

class RegisterController extends Controller
{
    //
    public function Register()
    {
        return view('mockup.register');
    }
}

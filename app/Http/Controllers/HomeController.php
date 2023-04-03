<?php

namespace App\Http\Controllers;

use App\Models\Call;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $calls = Call::all();
        return view('index' , compact('calls'));
    }
}

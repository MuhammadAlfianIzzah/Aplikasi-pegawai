<?php

namespace App\Http\Controllers;

use App\Models\Golongan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function welcome()
    {
        return view("pages.home.welcome");
    }
    public function tes()
    {
        $factory = Golongan::factory()->count(4);
        dd($factory->create());
    }
}

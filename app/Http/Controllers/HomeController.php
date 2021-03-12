<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Menu;

class HomeController extends Controller
{

    public function index()
    {
        return view('index', ['populars' => Post::popular()]);
    }

    public function todaySpecial()
    {
        return view('today-special', ['posts' => Post::index()]);
    }
    public function menu()
    {
        return view('menu', ['menus' => Menu::menu()]);
    }
    public function contact()
    {
        return view('contact');
    }
}

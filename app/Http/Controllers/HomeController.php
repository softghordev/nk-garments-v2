<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
<<<<<<< HEAD
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
=======
    function __construct()
    {
        $this->middleware('can:dashboard', ['only' => ['index']]);
    }

>>>>>>> 9066209 (Hello)
    public function index()
    {
        return view('admin.inc.content');
    }
}

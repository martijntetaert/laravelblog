<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use function GuzzleHttp\Promise\all;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

            return view('admin.index', compact('usersamount','blogsamount'));
    }
}

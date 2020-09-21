<?php

namespace App\Http\Controllers;

use App\User;
use App\Makanan;
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
        return view('adminhome', [
            'count_makanan' => Makanan::all()->count(),
            'count_admin' => User::where('level', 'admin')->count(),
            'count_waiter' => User::where('level', 'waiter')->count(),
            'count_kasir' => User::where('level', 'kasir')->count(),
        ]);
    }
}

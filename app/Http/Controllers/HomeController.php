<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use App\Mevent;
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
        //$this->middleware('auth');
        $this->middleware('cors');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function mevent(Request $request)
    {
        $obj = $request->all();
        $dbb = new Mevent();
        $dbb->obj = serialize($obj);
        $dbb->save();
        return $dbb->obj;

    }
}

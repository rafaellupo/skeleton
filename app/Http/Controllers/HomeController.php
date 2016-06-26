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

    public function mevent()
    {
        /*$obj = $request->all();
        $dbb = new Mevent();
        $dbb->obj = serialize($obj);
        $dbb->save();
        return $dbb->obj;*/
        $fh = fopen('dump.log', 'a+');
        if ( $fh )
        {
        // Dump body
            fwrite($fh, print_r($_POST, true));
            fclose($fh);
        }

        return "ok";

    }
}

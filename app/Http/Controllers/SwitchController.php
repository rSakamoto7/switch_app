<?php

namespace App\Http\Controllers;

use App\Mechanical;
use Illuminate\Http\Request;

class SwitchController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function list()
    {
        $mechanicals = Mechanical::all();
        
        return view('list',[
            'mechanicals' => $mechanicals,
        ]);
    }

    public function search(Request $request)
    {
        $mechanical = new Mechanical();

        $mechanical->weight = $request->weight;
        $mechanical->click = $request->click;
        $mechanical->noise = $request->noise;
        $mechanical->response = $request->response;

        $mechanical->save();

    }
}

<?php

namespace App\Http\Controllers;

use App\Mechanical;
use App\Result;
use Session;
use Illuminate\Http\Request;

class SwitchController extends Controller
{
    public function index(Request $request)
    {
        // $tempo=['weight'=>'', 'click'=>'', 'noise'=>'', 'response'=>''];
        return view('home',[
            'request' => $request,
        ]);
    }

    public function result(Request $request)
    {
        $result = new Result();
        $mechanicals = Mechanical::all();

        $result->weight = $request->weight;
        $result->click = $request->click;
        $result->noise = $request->noise;
        $result->response = $request->response;

        $result->save();

        return view('result',[
            'result' => $result,
            'mechanicals' => $mechanicals,
        ]);
    }

    // public function getResult()
    // {
    //     // $result = Result::all();
    //     return view('result');
        
    //     // $postdata = Session::get('_old_input');
    //     // return view('result', compact('postdata'));
    // }

    public function list()
    {
        $mechanicals = Mechanical::all();
        
        return view('list',[
            'mechanicals' => $mechanicals,
        ]);
    }
}

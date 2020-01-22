<?php

namespace App\Http\Controllers;

use App\Mechanical;
use App\Result;
use Session;
use Illuminate\Http\Request;

class SwitchController extends Controller
{
    public function index()
    {
        return view('home');
    }

    // public function getResult()
    // {
    //     return view('result');
    // }

    public function result(Request $request)
    {
        $result = new Result();
        // $mechanicals = Mechanical::all();

        $result->weight = $request->weight;
        $result->click = $request->click;
        $result->noise = $request->noise;
        $result->response = $request->response;

        $result->save();

        // 条件絞る
        $query = Mechanical::query();
        $rweight = $request->weight;
        $rclick = $request->click;
        $rnoise = $request->noise;
        $rresponse = $request->response;
        if(!empty($rweight)) {
            $query->where('weight', $request->weight);
        }
        if(!empty($rclick)) {
            $query->where('click', $request->click);
        }
        if(!empty($rnoise)) {
            $query->where('noise', $request->noise);
        }
        if(!empty($rresponse)) {
            $query->where('response', $request->response);
        }
        $mechanicals = $query->get();
        
        return view('result',[
            'request' => $request,
            'result' => $result,
            'mechanicals' => $mechanicals,
        ]);
    }

    public function list()
    {
        $mechanicals = Mechanical::all();
        
        return view('list',[
            'mechanicals' => $mechanicals,
        ]);
    }
}

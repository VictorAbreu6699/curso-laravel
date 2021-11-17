<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(int $p1, int $p2)
    {
        //return view('site.teste.index', ['p1' => $p1, 'p2' => $p2]);//array assiciativo

        //return view('site.teste.index', compact('p1', 'p2')); //compact

        //return view('site.teste.index')->with('p1', $p1)->with('p2', $p2);//with
    }
}

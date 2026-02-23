<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function create()
    {
        return view('example.create');
    }

    public function result(Request $request)
    {
        $request->validate([
            'n' => 'required|integer|min:0'
        ]);

        $n = $request->input('n');

        $sequence = [];
        $a = $n;
        $b = $n + 1;

        for ($i = 0; $i < 10; $i++) {
            $sequence[] = $a;
            $temp = $a + $b;
            $a = $b;
            $b = $temp;
        }

        return view('example.result', compact('sequence', 'n'));
    }

}

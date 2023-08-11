<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarcodeController extends Controller
{
    public function generate()
    {

        return view('generate')->with([
            'product_id' => 5000
        ]);

    }

    public function scan()
    {

        return view('scan')->with([
            
        ]);

    }
}

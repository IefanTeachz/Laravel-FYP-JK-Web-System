<?php

namespace App\Http\Controllers;

use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

use Illuminate\Http\Request;

class PythonController extends Controller
{
   
    public function testPythonScript()
    {    
        $run = exec("/laragon/www/jomkahwin/public/python/quote.py");

        return view('admin.home')->with('success','Web scrap have complete created successfully.');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculateController extends Controller
{
    public function calculator (Request $request) {

        $action = $request->action;
        $num1 = $request->numberOne;
        $num2 = $request->numberTwo;

        if ($action == 'add') {
            $result = $num1 + $num2;
        }
        elseif ($action == 'subtract') {
            $result = $num1 - $num2;
        }
        elseif ($action == 'division') {
            $result = $num1 / $num2;
        }
        elseif ($action == 'multiplication') {
            $result = $num1 * $num2;
        }
        else {
            $result = '';
        }

        return view('calculate', compact('result'));
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WeightTarget;

class WeightTargetController extends Controller
{
    public function getRegister()
    {
        $weight_target = WeightTarget::all();

        return view('weightregister');
    }
}

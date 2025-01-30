<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WeightLog;

class WeightController extends Controller
{
    public function update()
    {
        $weight_logs = WeightLog::all();
        return view('update');
    }

    public function admin()
    {
        $contacts = Contact::with('category')->paginate(7);
        $weight_targets = Weight_Target::all();
        return view('admin', compact('contacts', 'categories', 'csvData'));
    }

}

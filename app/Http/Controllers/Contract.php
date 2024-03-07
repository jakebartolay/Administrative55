<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contract_table;

class contract extends Controller
{
    public function contract(){

        $contract = contract_table::all();
        return view('contract', compact('contract'));
    }

}

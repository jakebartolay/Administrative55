<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\document_table;

class document extends Controller
{
    public function document(){

        $document = document_table::all();
        return view('document', compact('document'));
    }
}

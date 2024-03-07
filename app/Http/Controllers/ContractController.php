<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contract;

class ContractController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'contract_name' => 'required|string',
            'client_id' => 'required|string',
            'project_id' => 'required|string',
            'description' => 'nullable|string',
            'file_path' => 'nullable|string',
            'state_date' => 'nullable|date',
            'end_date' => 'nullable|date',
            'signed_by' => 'nullable|string',
            'signed_at' => 'nullable|date',
            'document_id' => 'nullable|string',
        ]);

        // Create a new contract record
        $contract = new Contract();
        $contract->fill($validatedData);
        $contract->save();

        // You can return a response indicating success or redirect to another page
        return response()->json(['message' => 'Contract added successfully']);
    }
}
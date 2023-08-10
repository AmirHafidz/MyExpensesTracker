<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class UserFinancialController extends Controller
{
    public function index(Request $request)
    {   

        Log::info(Auth()->user());
        return response()->json([
            'message' => 'Data Retrieve Successfully'
        ]);
    }

    public function store(Request $request)
    {
        //
    }
}

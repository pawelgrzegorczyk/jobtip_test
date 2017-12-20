<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Position;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(Request $request)
    {
        $companies = Company::all();
        return view('list', ['companies' => $companies]);
    }

    public function referenceView(Request $request, string $reference)
    {
        $position = Position::where('reference', $reference)->get()->first();
        return view('reference', ['position' => $position]);
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\Property;

class ReportController extends Controller
{
    public function index()
    {
        $commercialCount = Property::where('type', 'Commercial')->whereNull('deleted_at')->count();
        $residentialCount = Property::where('type', 'Residential')->whereNull('deleted_at')->count();

        return view('report', compact('commercialCount', 'residentialCount'));
    }
}
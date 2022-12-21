<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class EmpController extends Controller
{
    public function create()
    {
        return Inertia::render('Employee/Create');
    }

    public function store(Request $request)
    {
        Employee::create($request);
        dd('created');
    }
}

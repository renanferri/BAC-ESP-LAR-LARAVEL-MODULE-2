<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployerController extends Controller
{
    public function __construct()
    {
        $this->middleware('checkToken:general-token')->only('index');

        $this->middleware('checkToken:simple-token')->only('create');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return 'list of employers';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return response()->json(['creating-test' => true], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

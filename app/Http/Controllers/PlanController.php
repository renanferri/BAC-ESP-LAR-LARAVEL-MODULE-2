<?php

namespace App\Http\Controllers;

use App\Http\Requests\PlanRequest;
use App\Models\Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // session([
        //     'custom-key' => 'default-value'
        // ]);

        // session()->forget('custom-key');

        // return session()->get('custom-key2');
        
        //Cookie::queue('custom-cookie', 'default-cookie', 10);

        Cookie::queue(Cookie::forget('custom-cookie'));

        return Plan::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // session()->put('custom-key2', '2');

        // return session()->all();

        // dd(Cookie::get('custom-cookie'));

        return view('plan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PlanRequest $request)
    {
        return Plan::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    //     return Plan::find($id);  
    // }

    public function show(Plan $plan)
    {
        return $plan;
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

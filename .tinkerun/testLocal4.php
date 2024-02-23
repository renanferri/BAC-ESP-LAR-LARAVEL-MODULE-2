<?php

use App\Models\Plan;
use App\Models\User;
use Illuminate\Support\Facades\DB;

// $user = User::select('name as nome', 'id')->with('client:user_id,document as cpf,birthdate')->toSql();

/*
DB::table('users')
    ->join('clients', 'users.id', '=', 'clients.user_id')
    ->select('users.name as nome', 'clients.document as cpf')
    ->get();
*/

// $plan = Plan::first();

// $plan->fullName;

$plan = DB::table('plans')->first();

$plan->fullName;
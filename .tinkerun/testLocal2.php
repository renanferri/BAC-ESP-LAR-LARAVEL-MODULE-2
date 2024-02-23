<?php

use App\Models\User;

/*
$users = User::where('name', 'like', 'Dr.%')
    ->orWhere('name', 'like', 'Sr.%')
    ->get();
    
    $users = User::where('name', 'like', '%ilho')
    ->where('email', 'like', '%org%')
    ->get();    
    

$users = User::where([
    ['name', 'like', '%ilho'],
    ['email', 'like', '%org%']
])->get();    


*/


$users = User::where('email', 'like', '%org%')
    ->where(function ($q) {
        $q->where('name', 'like', '%Filho')->orWhere('name', 'like', '%Sr.%');
    })
->get();    
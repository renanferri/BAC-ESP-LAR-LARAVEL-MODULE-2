<?php

use App\Models\User;

$users = User::all();

$users = User::select('name')->limit(4)->get();

$user = User::find(1);

$user = User::findOrFail(25);

$user = User::findOr(25, fn() => 'Registro no encontrado');




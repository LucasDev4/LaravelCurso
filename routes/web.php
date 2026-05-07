<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $nome = "Lucas";
    $nomes = ["Lucas", "Brendo", "Orrico", "Murilo", "Erika"];
    $arr = [1, 2, 3, 4, 5];
    return view('welcome', ["nome" => $nome, "arr" => $arr, "nomes" => $nomes]);
});

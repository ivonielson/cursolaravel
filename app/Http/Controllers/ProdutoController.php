<?php

namespace App\Http\Controllers;

use Faker\Guesser\Name;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index() {
        return "index produto";
    }

    public function show($id = 0) {
        return "show produto:".$id;
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComicsController extends Controller
{
    public function index(){
    $comics = Comic::all();
    return view('comics.index', compact('comics'));
 }
}

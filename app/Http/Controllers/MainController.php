<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
class MainController extends Controller
{
    public function index(){
        $articles = json_decode(File::get(public_path('articles.json')));
        return view('articles', ['articles' => $articles]);
    }
    }
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
public  function index(){
    $title = 'Học lập trình web';
    $content = 'Học lập trình laravel';

    $dataView = [
        'title' => $title,
        'content' => $content
    ];
    return view('Home',$dataView);
}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HomeController extends Controller
{
    /**
     * @return Response
     */
    public function showForm() {
        return view('home.show_form');
    }

    /**
     * @return Response
     */
    public function handleForm() {
        return view('home.show_form');
    }
}

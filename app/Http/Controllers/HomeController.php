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
        $title = "Show form";
        return view('home.show_form', compact('title'));
    }

    /**
     * @return Response
     */
    public function handleForm() {
        $title = "Results | Show form";
        return view('home.show_form', compact('title'));
    }
}

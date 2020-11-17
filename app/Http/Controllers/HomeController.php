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
     * @param Request $input
     * @return Response
     */
    public function handleForm(Request $input) {
        $title = "Results | Show form";
        $results = [];
        return view(
            'home.handle_form', 
            compact('title', 'results')
        );
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Book_FormController extends Controller
{
    public function book_form() {
        return view('book_form');
    }
}

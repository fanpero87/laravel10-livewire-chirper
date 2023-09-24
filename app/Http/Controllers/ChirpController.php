<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class ChirpController extends Controller
{
    /**
     * Display a listing of the resoruce
     */

    public function index(): View
    {
        return view('chirps', []);
    }
}

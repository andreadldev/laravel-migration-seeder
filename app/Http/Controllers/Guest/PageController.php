<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function index() {
        $trains = Train::whereBetween('departure', ['2023-01-17 00:00:00', '2023-01-18 23:59:59'])->get();
        return view('welcome', compact('trains'));
    }
}

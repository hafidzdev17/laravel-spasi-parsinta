<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        return view('home', [
            'user' => Biodata::latest()
                ->filter(request(['search']))
                ->paginate(6)->withQueryString()
        ]);
    }
}

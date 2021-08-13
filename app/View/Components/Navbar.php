<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Navbar extends Component
{

    public function __construct()
    {
        //
    }


    public function render()
    {
        $navigations = [
            'Home' => '/',
            'Profile' => '/profile',
            'About' => '/about',
            'Contact' => '/contact',
        ];

        return view('layouts.navbar', [
            'navbar' => $navigations
        ]);
    }
}

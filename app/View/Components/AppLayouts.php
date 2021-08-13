<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AppLayouts extends Component
{

    public $title;
    public function __construct($title = null)
    {
        $this->title = $title ?? "Shinra Tensei";
    }


    public function render()
    {
        return view('layouts.app');
    }
}

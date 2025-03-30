<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Package;

class Package1 extends Component
{
    public $package;

    public function __construct()
    {
        $this->package = Package::where('name', 'Paket Normal')->first();
    }

    public function render()
    {
        return view('components.package1')->with('package', $this->package);
    }
}

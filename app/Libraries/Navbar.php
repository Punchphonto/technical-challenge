<?php

namespace App\Libraries;

class Navbar
{
    /**
     * Render the main site navigation bar as a view cell.
     */
    public function render(): string
    {
        return view('partials/navbar');
    }
}

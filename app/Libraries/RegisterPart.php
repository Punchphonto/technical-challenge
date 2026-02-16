<?php

namespace App\Libraries;

class RegisterPart
{
    /**
     * Render the hero registration/signup strip.
     */
    public function render(): string
    {
        return view('partials/register_part');
    }
}

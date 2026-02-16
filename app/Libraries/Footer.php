<?php

namespace App\Libraries;

class Footer
{
    /**
     * Render the main signup footer as a view cell.
     */
    public function render(): string
    {
        return view('partials/footer');
    }
}

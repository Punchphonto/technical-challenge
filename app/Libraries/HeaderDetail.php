<?php

namespace App\Libraries;

class HeaderDetail
{
    /**
     * Render the hero header detail (logo + titles).
     */
    public function render(): string
    {
        return view('partials/header_detail');
    }
}

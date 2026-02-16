<?php

namespace App\Libraries;

class MainDetail
{
    /**
     * Render the main detail sections as a view cell.
     */
    public function render(): string
    {
        $dataFile = APPPATH . 'Data/main_detail.json';

        $content = [];

        if (is_file($dataFile)) {
            $json = file_get_contents($dataFile) ?: '';
            $decoded = json_decode($json, true);

            if (is_array($decoded)) {
                $content = $decoded;
            }
        }

        return view('partials/main_detail', [
            'content' => $content,
        ]);
    }
}

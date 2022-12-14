<?php

use Illuminate\Support\HtmlString;

if (! function_exists('vite_assets')) {
    /**
     * @return HtmlString
     * @throws Exception
     */
    function vite_assets(): HtmlString
    {
        $devServerIsRunning = false;

        if (app()->environment('local')) {
            try {
                $devServerIsRunning = file_get_contents(public_path('dev')) == 'dev';
            } catch (Exception) {}
        }

        if ($devServerIsRunning) {
            return new HtmlString(<<<HTML
            <script type="module" src="http://localhost:8000/@vite/client"></script>
            <script type="module" src="http://localhost:8000/resources/js/app.js"></script>
        HTML);
        }
        $manifest = json_decode(file_get_contents(
            public_path('build/manifest.json')
        ), true);
        return new HtmlString(<<<HTML
        <script type="module" src="/build/assets/app.334e7359"></script>
        <link rel="stylesheet" href="/build/assets/app.3496d2b4.css">
    HTML);
    }
}

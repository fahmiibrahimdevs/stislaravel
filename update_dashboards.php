<?php

function migratePage($sourceFile, $bladePath) {
    $content = file_get_contents($sourceFile);
    $inner = '';
    $mainContentStart = strpos($content, '<div class="main-content">');
    if ($mainContentStart !== false) {
        $mainContentEnd = strpos($content, '<footer class="main-footer">', $mainContentStart);
        if ($mainContentEnd !== false) {
            $inner = substr($content, $mainContentStart, $mainContentEnd - $mainContentStart);
            $inner = preg_replace('/^<div class="main-content">/', '', $inner);
            $inner = trim($inner);
            if (substr($inner, -6) === '</div>') {
                $inner = substr($inner, 0, -6);
            }
        }
    }

    $cssLibs = '';
    if (preg_match('/<!-- CSS Libraries -->(.*?)<!-- Template CSS -->/s', $content, $matches)) {
        $cssLibs = trim($matches[1]);
        $cssLibs = str_replace('../node_modules', '/assets/modules', $cssLibs);
    }

    $jsLibs = '';
    if (preg_match('/<!-- JS Libraies -->(.*?)<!-- Template JS File -->/s', $content, $matches)) {
        $jsLibs = trim($matches[1]);
        $jsLibs = str_replace('../node_modules', '/assets/modules', $jsLibs);
    }

    $pageJs = '';
    if (preg_match('/<!-- Page Specific JS File -->(.*?)<\/body>/s', $content, $matches)) {
        $pageJs = trim($matches[1]);
        $pageJs = str_replace('../assets/', '/assets/', $pageJs);
    }
    
    $bladeContent = "<div>\n" . trim($inner);
    
    if ($cssLibs) {
        $bladeContent .= "\n\n@push('general-css')\n" . $cssLibs . "\n@endpush";
    }
    if ($jsLibs) {
        $bladeContent .= "\n\n@push('js-libraries')\n" . $jsLibs . "\n@endpush";
    }
    if ($pageJs) {
        $bladeContent .= "\n\n@push('scripts')\n" . $pageJs . "\n@endpush";
    }
    
    $bladeContent .= "\n</div>";
    
    file_put_contents($bladePath, $bladeContent);
    echo "Updated {$bladePath}\n";
}

$stislaDir = '/var/www/projects/static/stisla-tailwind/pages';
migratePage($stislaDir . '/index-0.html', '/var/www/projects/laravel/stislaravel/resources/views/livewire/dashboard/dashboard.blade.php');
migratePage($stislaDir . '/index.html', '/var/www/projects/laravel/stislaravel/resources/views/livewire/dashboard/ecommerce.blade.php');


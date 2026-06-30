<?php

$sourceDir = '/var/www/projects/static/stisla-tailwind/pages';
$files = glob($sourceDir . '/*.html');

$exclude = [
    'index-0.html',
    'index.html',
    'layout-default.html',
    'layout-top-navigation.html',
    'layout-transparent.html',
    'auth-login.html',
    'auth-login-2.html',
    'auth-register.html',
    'auth-forgot-password.html',
    'auth-reset-password.html'
];

$routes = "<?php\n\nuse Illuminate\\Support\\Facades\\Route;\n\n";
$routes .= "Route::middleware('auth')->group(function () {\n";

foreach ($files as $file) {
    $basename = basename($file);
    if (in_array($basename, $exclude)) {
        continue;
    }

    $nameWithoutExt = pathinfo($basename, PATHINFO_FILENAME);
    $componentName = str_replace(' ', '', ucwords(str_replace('-', ' ', $nameWithoutExt)));
    $componentDir = "Pages";
    $fullComponentName = "{$componentDir}/{$componentName}";

    echo "Processing {$basename} -> {$fullComponentName}...\n";

    $content = file_get_contents($file);
    
    // Extract main content
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

    // Extract CSS libraries
    $cssLibs = '';
    if (preg_match('/<!-- CSS Libraries -->(.*?)<!-- Template CSS -->/s', $content, $matches)) {
        $cssLibs = trim($matches[1]);
        $cssLibs = str_replace('../node_modules', '/assets/modules', $cssLibs);
    }

    // Extract JS libraries
    $jsLibs = '';
    if (preg_match('/<!-- JS Libraies -->(.*?)<!-- Template JS File -->/s', $content, $matches)) {
        $jsLibs = trim($matches[1]);
        $jsLibs = str_replace('../node_modules', '/assets/modules', $jsLibs);
    }

    // Extract Page Specific JS
    $pageJs = '';
    if (preg_match('/<!-- Page Specific JS File -->(.*?)<\/body>/s', $content, $matches)) {
        $pageJs = trim($matches[1]);
        $pageJs = str_replace('../assets/', '/assets/', $pageJs);
    }
    
    // Combine everything
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

    $kebabName = strtolower(preg_replace('/(?<!^)[A-Z]/', '-$0', $componentName));
    $bladePath = __DIR__ . '/resources/views/livewire/pages/' . $kebabName . '.blade.php';
    
    file_put_contents($bladePath, $bladeContent);
    
    $routeName = "pages." . $nameWithoutExt;
    $routeUrl = "/pages/" . $nameWithoutExt;
    $routes .= "    Route::get('{$routeUrl}', \\App\\Livewire\\Pages\\{$componentName}::class)->name('{$routeName}');\n";
}

$routes .= "});\n";

file_put_contents(__DIR__ . '/routes/stisla.php', $routes);
echo "Done!\n";

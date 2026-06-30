<?php
$file = '/var/www/projects/laravel/stislaravel/resources/views/components/layouts/default.blade.php';
$content = file_get_contents($file);

$content = preg_replace_callback('/href="([a-zA-Z0-9\-]+)\.html"/', function ($matches) {
    $filename = $matches[1];
    
    $exclude = [
        'index-0',
        'index',
        'layout-default',
        'layout-top-navigation',
        'layout-transparent',
        'auth-login',
        'auth-login-2',
        'auth-register',
        'auth-forgot-password',
        'auth-reset-password'
    ];
    
    if (in_array($filename, $exclude)) {
        if ($filename === 'auth-login') {
            return 'href="{{ route(\'login\') }}"';
        }
        if ($filename === 'auth-register') {
            return 'href="{{ route(\'register\') }}"';
        }
        if ($filename === 'auth-forgot-password') {
            return 'href="{{ route(\'password.request\') }}"';
        }
        return 'href="#"'; // Not implemented routes
    }
    
    return 'href="{{ route(\'pages.' . $filename . '\') }}"';
}, $content);

file_put_contents($file, $content);
echo "Sidebar links updated.\n";

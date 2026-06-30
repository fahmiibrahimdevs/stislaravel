<?php

$file = '/var/www/projects/laravel/stislaravel/resources/views/components/layouts/default.blade.php';
$content = file_get_contents($file);

// 1. Extract Navbar
$navStartStr = '<nav class="navbar navbar-expand-lg main-navbar">';
$navEndStr = '</nav>';
$navStart = strpos($content, $navStartStr);
$navEnd = strpos($content, $navEndStr, $navStart) + strlen($navEndStr);
$navbarHtml = substr($content, $navStart, $navEnd - $navStart);
file_put_contents('/var/www/projects/laravel/stislaravel/resources/views/components/navbar.blade.php', $navbarHtml);
$content = substr_replace($content, '<x-navbar />', $navStart, $navEnd - $navStart);

// 2. Extract Sidebar
$sidebarStartStr = '<div class="main-sidebar">';
// We need to find the matching </div> for main-sidebar.
// Since we know the exact structure, we can find <aside id="sidebar-wrapper"> and its closing </aside>, then the closing </div>.
$asideEndStr = '</aside>';
$asideEnd = strpos($content, $asideEndStr);
$sidebarEndStr = '</div>';
$sidebarEnd = strpos($content, $sidebarEndStr, $asideEnd) + strlen($sidebarEndStr);
$sidebarStart = strpos($content, $sidebarStartStr);
$sidebarHtml = substr($content, $sidebarStart, $sidebarEnd - $sidebarStart);
file_put_contents('/var/www/projects/laravel/stislaravel/resources/views/components/sidebar.blade.php', $sidebarHtml);
$content = substr_replace($content, '<x-sidebar />', $sidebarStart, $sidebarEnd - $sidebarStart);

// 3. Extract Footer
$footerStartStr = '<footer class="main-footer">';
$footerEndStr = '</footer>';
$footerStart = strpos($content, $footerStartStr);
$footerEnd = strpos($content, $footerEndStr, $footerStart) + strlen($footerEndStr);
$footerHtml = substr($content, $footerStart, $footerEnd - $footerStart);
file_put_contents('/var/www/projects/laravel/stislaravel/resources/views/components/footer.blade.php', $footerHtml);
$content = substr_replace($content, '<x-footer />', $footerStart, $footerEnd - $footerStart);

file_put_contents($file, $content);
echo "Layout components extracted.\n";

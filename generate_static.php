<?php

require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$routes = [
    '/' => 'public/index.html',
    '/projects' => 'public/projects/index.html',
    '/about' => 'public/about/index.html',
    '/services' => 'public/services/index.html',
    '/contact' => 'public/contact/index.html',
];

$projects = App\Data\ProjectsData::getAll();
foreach ($projects as $p) {
    $routes['/projects/' . $p['slug']] = 'public/projects/' . $p['slug'] . '/index.html';
}

foreach ($routes as $uri => $outPath) {
    $request = Illuminate\Http\Request::create($uri, 'GET');
    $response = $app->handle($request);
    $html = $response->getContent();
    
    $dir = dirname(__DIR__ . '/' . $outPath);
    if (!is_dir($dir)) {
        mkdir($dir, 0777, true);
    }
    file_put_contents(__DIR__ . '/' . $outPath, $html);
    echo "Generated: $outPath\n";
}

<?php

// Pastikan direktori writeable sementara di /tmp tersedia untuk lingkungan serverless Vercel
$storageDirs = [
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/cache',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/logs',
    '/tmp/bootstrap/cache',
];

foreach ($storageDirs as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0755, true);
    }
}

// Teruskan request ke entrypoint Laravel public/index.php
require __DIR__ . '/../public/index.php';

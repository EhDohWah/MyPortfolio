<?php

// Check if the request is for an asset file
$requestedAssetFile = __DIR__ . '/../public/import/assets/' . ltrim($_SERVER['REQUEST_URI'], '/');
if (file_exists($requestedAssetFile) && is_file($requestedAssetFile)) {
    // Serve the asset file directly
    return readfile($requestedAssetFile);
}

require __DIR__ . "/../public/index.php";

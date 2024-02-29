<?php
header('Content-Type: application/json');
$directoryPath = '../assets/gallery'; // A mappa elérési útja
$images = [];

// Ellenőrizzük, hogy a mappa létezik-e és olvasható-e
if (is_dir($directoryPath) && $dir = opendir($directoryPath)) {
    while (($file = readdir($dir)) !== false) {
        if ($file != '.' && $file != '..' && preg_match('/\.(jpg|jpeg|png|webp|gif)$/i', $file)) {
            $images[] = $file;
        }
    }
    closedir($dir);
}

echo json_encode($images);

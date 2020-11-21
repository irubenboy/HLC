<?php

if (!isset($_GET['file']) || empty($_GET['file'])) {
    exit();
}

    $file = basename($_GET['file']);
    $path = '../uploads/'.$file;
if (is_file($path))
{
    header('Content-Type: application/force-download');
    header('Content-Disposition: attachment; filename='.$file);
    header('Content-Transfer-Encoding: binary');
    header('Content-Length: '.filesize($path));
    readfile($path);
}
else{
    exit();
}
?>
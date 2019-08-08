<?php
if (isset($_GET['filename'])) {
    switch (strtolower($_GET['filename'])) {
        case '':
            $page_title = 'Loja';
            $page_content = 'pages/home.php';
            include('templates/main-template.php');
            break;
        case 'cadastrar':
        case 'signup':
            $page_title = 'Nova conta';
            $page_content = 'pages/signup.php';
            include('templates/clean-template.php');
            break;
        default:
            header('HTTP/1.0 404 Not Found');
            include('pages/404.html');
            break;
    }
} else {
    $page_title = 'Loja';
    $page_content = 'pages/home.php';
    include('templates/main-template.php');
}

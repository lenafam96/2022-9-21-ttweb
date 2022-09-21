<?php

$action = $_GET['action'] ?? 'home';
switch ($action) {
    case 'home':
        require_once 'home.php';
        break;
    case 'rectangle':
        require_once 'rectangle.php';
        break;
    case 'circle':
        require_once 'circle.php';
        break;
    case 'tiendien':
        require_once 'tiendien.php';
        break;  
    case 'canhhuyen':
        require_once 'canhhuyen.php';
        break; 
    case 'solonhon':
        require_once 'solonhon.php';
        break;   
}
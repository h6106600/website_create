<?php

if ($_SERVER['REQUEST_URI'] == '/') {
    require_once 'view/home.php';
}
if ($_SERVER['REQUEST_URI'] == '/1') {
    require_once 'view/template1.php';
}

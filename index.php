<?php
include('header.php');

if(isset($_GET['page']) && !empty($_GET['page'])) {
    $page = $_GET['page'];
    $display = $page . '.php';
    if(file_exists($display)) {
        include($display);
    }
    else {
        // Handle the case when the requested file doesn't exist
        include('main.php');
    }
} else {
    include('main.php');
}
include('footer.php');
?>

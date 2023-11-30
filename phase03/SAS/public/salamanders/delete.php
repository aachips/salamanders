<?php require_once('../../private/initialize.php');
    $test = $_GET['test'] ?? '';
    if($test == '404') 
        error_404();
    elseif($test == '500')
        error_500();
    elseif($test == 'redirect') 
        redirect_to(urlFor('/staff/pages/index.php'));
    else    
        echo 'No error'; 
        
    $page_title = 'Create Page';
    include(SHARED_PATH . '/staff-header.php'); ?>
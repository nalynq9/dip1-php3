<?php
    $role = 'subscriber';
    $msg = "";

    switch($role){
        case 'admin':
            $msg = 'Welcome,Admin';
            break;
        
        case 'editor':
            $msg = 'Article to edit';
            break;
        
        case 'editor':
            $msg = 'Check new Article';
            break;
        default:
            $msg = 'Sorry';
    }
    echo $msg;
    
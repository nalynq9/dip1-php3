<?php
    $role = 'subscriber';
    $msg = "";

    if('admin' === $role){
        $msg = 'Welcome,Admin';
    }
    elseif('editor' === $role){
        $msg = 'Article to edit';
    }   
    elseif('subscriber' === $role){
        $msg = 'Check new Article';
    }
    else{
        $msg = 'Sorry';
    }
    echo $msg;

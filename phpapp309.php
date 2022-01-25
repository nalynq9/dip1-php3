<?php
    $isLogin = false;

    if($isLogin){
        $title = 'Logout';
    }
    else{
        $title = 'Login';
    }
    //echo $title;
?>

<?php
    $isLogin = true;
    $title = $isLogin? 'Logout':'Login';
    echo $title;
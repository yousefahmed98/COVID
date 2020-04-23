<?php
    // Get Title of Pages
    function getTitle(){
        global $PageTitle;
        if(isset($PageTitle)){
            echo $PageTitle;
        }else{
            echo 'Default';
        }
    }

    // get user IP
    function getUserIp(){
        if (isset($_SERVER['HTTP_CLIENT_IP']))
            $header = $_SERVER['HTTP_CLIENT_IP'];
        else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
            $header = $_SERVER['HTTP_X_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_X_FORWARDED']))
            $header = $_SERVER['HTTP_X_FORWARDED'];
        else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
            $header = $_SERVER['HTTP_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_FORWARDED']))
            $header = $_SERVER['HTTP_FORWARDED'];
        else
            $header = NULL;

        $user_ip = $_SERVER['REMOTE_ADDR'];

        return $user_ip;
    }
    
?>
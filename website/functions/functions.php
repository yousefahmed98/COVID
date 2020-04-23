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
?>
<?php
    function lang($phrase){
        static $lang = array(
            'تسجيل' => 'Sign Up',

        );
        return $lang($phrase);
    }
<?php

    $error='';
    $success='';
    function requirediput($value) {
        $value=trim($value);
        return strlen($value)> 0 ;
    }

    function sant_string($value) {
        $value=trim($value);
        $value=filter_var($value,FILTER_SANITIZE_STRING);
        return $value ;
    }

    function sant_email($email) {
        $email=trim($email);
        $email=filter_var($email,FILTER_SANITIZE_EMAIL);
        return $email ;
    }

    
    function min_input($value,$min_number) {
        return strlen($value)> $min_number;
    }

    function max_input($value,$max_number) {
        return strlen($value)< $max_number;
    }

    function valid_email($email) {
        return filter_var($email.FILTER_VALIDATE_EMAIL)? true : false;
    }
?>
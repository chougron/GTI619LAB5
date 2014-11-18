<?php

include_once './lib/loader.php';

if(CSRF::verifyToken()){
    echo "IT WORKS";
} else {
    echo "BAD CSRF";
}
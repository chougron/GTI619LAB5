<?php

include_once './lib/Loader.php';

if(CSRF::verifyToken()){
    echo "IT WORKS";
} else {
    echo "BAD CSRF";
}
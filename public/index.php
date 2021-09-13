<?php
    require_once '../app/Init.php';

    if(!session_id()){
        session_start();
    }

    $app = new App;

<?php

    function pr($data){
        echo "<pre>";
        print_r($data);
        echo "</pre>";
        exit;
    }

    function valueToKey($data, $col){
        return array_combine(array_column($data, $col), $data);
    }
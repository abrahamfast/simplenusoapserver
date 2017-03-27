<?php

                
function notification($param)
{

    file_put_contents(__DIR__ . "/logs.log", print_r($param . "\n", true), FILE_APPEND);

    return 'true';
}


function demo()
{
    return 'worked !!!';
}
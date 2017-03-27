<?php

                
function notification($msisdn, $trans_id, $trans_status, $datetime, $cahnnel, $shortcode, $keyword, $charge_code, $billed_price_point, $event_type, $validity, $next_renewal_date, $status)
{
    $line = $msisdn . "|" . $trans_id . "|" . $trans_status  . "|" .  $datetime  . "|" .  $cahnnel  . "|" .
            $shortcode  . "|" . $keyword  . "|" . $charge_code  . "|" . $billed_price_point  . "|" .
            $event_type  . "|" . $validity  . "|" . $next_renewal_date  . "|" . $status;
    file_put_contents(__DIR__ . "/logs.log", print_r($line . "\n", true), FILE_APPEND);

    return 'true';
}


function demo()
{
    return 'worked !!!';
}
<?php
/**
 * GetRealIp - Version 1.0
 *
 * Copyright 2015, François LASSERRE
 * http://www.choiz.fr
 *
 * Released under the GNU GPLv3 license - http://opensource.org/licenses/gpl-3.0
 */

function GetRealIp()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }

    return $ip;
}
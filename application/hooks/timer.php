<?php

function isCountDownFinished() {
    /*
     * Modify value of $releasing_date
     * only a count down page will be available for all routes if the time is not reached
     * if you don't want this, just set a old date or disable the hook
     */
    $releasing_date = new DateTime("2016-02-15 20:00:00");

    $server_time = date('D M d Y H:i:s O');
    if (new DateTime() < $releasing_date) {
        $releasing_date = $releasing_date->format('D M d Y H:i:s O');
        require_once APPPATH.'views/pages/countdown.php';
        exit;
    }
}


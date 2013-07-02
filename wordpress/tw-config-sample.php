<?php


define('TWILIO_ACCOUNT_SID', 'xxxxxxx');
define('TWILIO_AUTH_TOKEN', 'xxxxxxx');

// your phone number associated with your Twilio account
define('TWILIO_NUMBER', 'xxxxxxxxx');

function get_SMS_array() {
    return array(
        "+61xxxxxxxxx" => "Person 1",
        "+1xxxxxxxxxx" => "Person 2"
        // etc.
        );
}

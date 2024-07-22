<?php

require_once 'NormalPhone.php';
require_once 'SmartPhone.php';
require_once 'AndroidPhone.php';
class AndroidPhoneFactory implements PhoneFactory
{
    public static function getPhoneType($type, $number){
        switch ($type) {
            case "android":
                return new AndroidPhone($number);
            default:
                return null;
        }
    }

}


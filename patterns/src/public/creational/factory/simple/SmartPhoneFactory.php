<?php

require_once 'NormalPhone.php';
require_once 'SmartPhone.php';
class SmartPhoneFactory implements PhoneFactory
{
    public static function getPhoneType($type, $number){
        switch ($type) {
            case "smart":
                return new SmartPhone($number);
            default:
                return null;
        }
    }

}



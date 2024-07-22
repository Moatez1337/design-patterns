<?php

require_once 'NormalPhone.php';
require_once 'PhoneFactory.php';
class NormalPhoneFactory implements PhoneFactory
{
    public static function getPhoneType($type, $number){
        switch ($type) {
            case "old":
                return new NormalPhone($number);
            default:
                return null;
        }
    }

}

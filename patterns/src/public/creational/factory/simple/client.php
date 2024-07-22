<?php

require_once 'NormalPhone.php';
require_once 'Phone.php';
require_once 'NormalPhoneFactory.php';
require_once 'SmartPhoneFactory.php';
require_once 'SmartPhone.php';
require_once 'AndroidPhoneFactory.php';
require_once 'AndroidPhone.php';

$smartPhone = SmartPhoneFactory::getPhoneType("smart",2121321 );
$smartPhone->call();

$oldPhone = NormalPhoneFactory::getPhoneType("old",9999999 );
$oldPhone->call();

$oldPhone = AndroidPhoneFactory::getPhoneType("android",9999999 );
$oldPhone->call();
<?php

require_once __DIR__ . '/classes/Instagram';
require_once('classes/Facebook.php');
require('classes/TipTop.php');

switch ($_POST['cmpRedeSocial']) {
    case 'instagram':
        $redesocial = new Instagram;
        break;
    case 'facebook':
        $redesocial = new Facebook;
        break;
    case 'tipTop':
        $redesocial = new tipTop;
        break;
}

var_dump($redesocial);

die;
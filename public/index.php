<?php

use CowSay\Cow;

require '../vendor/autoload.php';

$bessie = new Cow("Hello my cow");
$bessie->setTongue('U')
    ->setUdder('W');
// store the output in a variable
$output = $bessie->say();
echo $output;

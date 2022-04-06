<?php  

require __DIR__. "/vendor/autoload.php";

use CowSay\Cow;

$bessie = new Cow('Hello, Farm!');

// store the output in a variable
$output = $bessie
            ->setEyes('oO')
            ->setTongue('U')
            ->setUdder('W');
echo $output;

// or just echo the object for direct output
// echo $bessie;
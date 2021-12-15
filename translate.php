<?php

require 'vendor/autoload.php';
use Stichoza\GoogleTranslate\GoogleTranslate;
$tr = new GoogleTranslate(); 
$tr->setSource($_POST['source']);
$tr->setTarget($_POST['target']);
echo $tr->translate($_POST['text']); exit;
<?php

require_once "CodeWarsKatas.php";
$cwk = new CodeWarsKatas();

$cwk->dirReduc(["NORTH","SOUTH","SOUTH","EAST","WEST","NORTH"]);

$multiply =  $cwk->multiply(2,10);


$duplicateCount = $cwk->duplicateCount("Indivisibility");

$alphabet_position = $cwk->alphabet_position('The narwhal bacon at midnight.');

$decode_morse = $cwk->decode_morse('.... . -.--   .--- ..- -.. .');
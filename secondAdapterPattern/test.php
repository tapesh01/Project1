<?php

include_once('simpleSong.php');
include_once('songAdapter.php');

define('BR'.'<'.'BR'.'>');

echo 'BEGIN TESTING ADAPTER PATTER'.BR;
echo BR;

$song = new simpleSong("Star Spangled Banner","G. W. E. Friederich");

$songAdapter = new songAdapter($song);

echo 'Composer and Title: '.$songAdapter->getComposerAndTitle();

echo BR.BR;
echo 'END TESTING ADAPTER PATTERN'.BR;

?>

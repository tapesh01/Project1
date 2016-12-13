<?php 

class simpleSong{
private $composer;
private $title;

function __construct($composer_in,$title_in){
	$this->composer = $composer_in;
	$this->title = $title_in;
}

function getComposoer(){return $this->composer;}
function getTitle() {return $this->title;}

}
?>

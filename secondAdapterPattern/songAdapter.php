<?php

include_once('simpleSong.php');

class songAdapter{

	private $song;

	function __construct(simpleSong $song_in){
		$this->song = $song_in;
	}

	function getComposerAndTitle(){
		return $this->song->getTitle().'by'.$this->song-?getComposer();
	}
}



?>

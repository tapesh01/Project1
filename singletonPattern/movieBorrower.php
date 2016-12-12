<?php

include_once('movieSingleton.php');

private $borrowedMovie;
private $haveMovie = FALSE;

function __construct(){
}

function getDirectorAndTitle(){
	if(TRUE == $this->haveMovie){
		return $this->borrowedMovie->getDirectorAndTitle();
	}
	else{
		return "I don't have the movie";
	}
}

function borrowMovie(){
	$this->borrowedMovie = movieSingletoon::borrowMovie();
	if ($this->borrowedMovie == NULL){
		this->haveMovie = FALSE;
	}
	else{
		this->haveMovie = TRUE;
	}
}



function returnMovie(){
	$this->borrowedMovie->returnMovie($this->borrowedMovie);
}

?>

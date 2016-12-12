<?php

private $director = 'Rian Johnson';
private $title = 'Star Wars: Episode VII';
private static $movie = NULL;
private static $isLoanedOut = FALSE;

private function __construct(){
}

static function borrowMovie() {
	if (FALSE == self::$isLoanedOut){
		if (NULL == self::$book){
			self::$book = new movieSingleton();
		}
		self::$isLoanedOut = TRUE;
		return self::$mobie;
	}
	else{return NULL;}
}

function returnMovie(movieSingleton $movieReturned){
	self::$isLoanedOut = FALSE;
}

function getDirector(){return $this->director;}

function getTitle(){return $this->title;}

function getDirectorAndTitle(){
	return $this->getTitle().'by'.$this->getDiretor();
	}

?>

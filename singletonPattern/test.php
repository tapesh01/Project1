<?php

include_once('movieSingleton.php');
include_once('movieBorrower.php');

writeln('BEGIN TESTING SINGLETON PATTERN');
writeln('');

$movieBorrower1 = new movieBorrower();
$movieBorrower2 = new movieBorrower();

$movieBorrower1->borrowBook();
writeln('movieBorrow1 ashed to borrow the movie');
writeln('movieBorrower1 Director and Title: ');
writeln($movieBorrower1->getDirectorAndTitle());
writeln('');

$movieBorrower2->borrowBook();
writeln('movieBorrow2 ashed to borrow the movie');
writeln('movieBorrower2 Director and Title: ');
writeln($movieBorrower2->getDirectorAndTitle());
writeln('');

$movieBorrower1->returnBook();
writeln('BookBorrower1 returned the book');
writeln('');

$bookBorrower2->borrowBook();
writeln('BookBorrower2 Author and Title: ');
writeln($bookBorrower1->getAuthorAndTitle());
writeln('');

writeln('END TESTING SINGLETON PATTERN';

function writeln($line_in) {
	echo $line_in.'<'.'BR'.'>'
      }





?>

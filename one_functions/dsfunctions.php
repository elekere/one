<?php 
 
 function findABook(Array $booklist, String $bookName) {
	 
	 $found = FALSE;
	 
	 foreach ($booklist as $index => $book) {
		 
		 if ($book === $bookName) {
			 
			 $found = $index;
			 break;
		 }
	 }
	 return $found;
 }
 
 function placeAllBooks (Array $orderedBooks, Array $bookList) {
	foreach ($orderedBooks as $book){
		$bookFound = findABook ($bookList, $book) 
		if ($bookFound !== FALSE) {
			array_splice($booklist, $bookFound, 1);
		}
		}
	 
	 
	 
 }

		$bookList = ['PHP','MySQL','PGSQL','Oracle','Java'];
		$orderedBooks = ['MySQL','PGSQL','Java'];
		
		placeAllBooks($orderedBooks, $bookList);
		echo implode(",", $bookList);
	 
 
?>
<?php
require('DB.class.php');


class Model {
	private $_db;

	public function __construct() {
		$this->_db = DB::getInstance();
	}

	public function getBookList()
	{
		$sql = "SELECT * FROM books";
		$answer = $this->_db->query($sql);
		if($answer){
		 	$books = array();
		 	while($res = mysqli_fetch_assoc($answer)){
				$books[] = $res;
		 	}
		 	return $books;
		}
		return array( "error" => "No books found" );
	}
	
	public function getBook($title)
	{
	
		$sql = "SELECT * FROM books WHERE book_title = '$title'";
		$answer = $this->_db->query($sql);
		if(mysqli_num_rows($answer)>0){
			return $answer->fetch_assoc();
		}
		return array( "error" => "No books found" );
	}

	public function __destruct() {
		$this->_db->close();
	}

	
	
}

?>
<?php
require_once "controller/Controller.php";

class Services {
	public $_controller;
	
	public function __construct()  
    {  
        $this->_controller = new Controller();

    } 
	
	public function getAllBooks()
	{
		$allBooks = $this->_controller->listAllBooks();
		return $allBooks;
	}

	public function getBookWithTitle($title)
	{
		$book = $this->_controller->findBook($title);
		return $book;
	}
	
}

?>
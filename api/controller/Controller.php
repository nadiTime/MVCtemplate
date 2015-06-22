<?php
include_once("model/Model.php");

class Controller {
	public $_model;
	
	public function __construct()  
    {  
        $this->_model = new Model();

    } 
	
	public function listAllBooks()
	{
		$allBooks = $this->_model->getBookList();
		return $allBooks;
	}

	public function findBook($title)
	{
		$book = $this->_model->getBook($title);
		return $book;
	}
	
}

?>
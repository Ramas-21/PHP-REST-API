<?php

class Post {
    // Database stuff
    private $conn;
    private $table = 'posts';

    //post properties
    public $id;
    public $category_id;
    public $category_name;
    public $title;
    public $body;
    public $author;
    public $create_date;

    // constructor with DB connection
    public function __construct($connect){
        $this->conn = $connect;
    }

    public function read()
}
?>
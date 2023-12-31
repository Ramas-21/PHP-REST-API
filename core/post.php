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
    public $created_at;

    // constructor with DB connection
    public function __construct($connect){
        $this->conn = $connect;
    }
    // getting post from the database
    public function read(){
        $query = 'SELECT
        c.name as category_name,
        p.id,
        p.category_id,
        p.title,
        p.body,
        p.author,
        p.created_at
        FROM
        ` .$this->table . ` p
        LEFT JOIN
        categories c ON p.category_id = c.id
        ORDER BY p.created_at';

        // prepare the statement 
        $stmt = $this->conn->prepare($query);
        //execute query
        $stmt->execute();
        return $stmt;
    }
}
?>
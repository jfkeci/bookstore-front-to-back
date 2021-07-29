<?php

class Genre
{

    private $conn;
    private $table = 'reviews';

    public $id;
    public $book_id;
    public $user_id;
    public $title;
    public $content;
    public $published;
    public $created_at;

    public function __construct($db)
    {
        $this->conn = $db;
    }


    public function create()
    {
    }

    public function read()
    {
    }

    public function read_single()
    {
    }

    public function update()
    {
    }

    public function delete()
    {
    }
}

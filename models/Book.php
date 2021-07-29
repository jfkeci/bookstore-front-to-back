<?php

class Book
{

    private $conn;
    private $table = 'books';

    public $id;
    public $name;
    public $author;
    public $genre;
    public $language;
    public $created_at;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function read()
    {
        //write query
        $query = 'SELECT * FROM ' . $this->table . ' ORDER BY id DESC;';
        //prepare statement
        $stmt = $this->conn->prepare($query);
        //execute statement
        $stmt->execute();
        //return executed statement
        return $stmt;
    }

    public function read_single()
    {
        $query = 'SELECT * FROM ' . $this->table . ' WHERE id=?;';

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(1, $this->id);

        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->id = $row['id'];
        $this->name = $row['name'];
        $this->author = $row['author'];
        $this->genre = $row['genre'];
        $this->language = $row['language'];
        $this->created_at = $row['created_at'];
    }

    public function create()
    {
        $query = 'INSERT INTO ' . $this->table . ' SET 
            name = :name, 
            author = :author, 
            genre = :genre,
            language = :language;';

        $stmt = $this->conn->prepare($query);

        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->language = htmlspecialchars(strip_tags($this->language));

        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':author', $this->author);
        $stmt->bindParam(':genre', $this->genre);
        $stmt->bindParam(':language', $this->language);

        if ($stmt->execute()) {
            return true;
        }

        printf("error: %s.\n, $stmt->error");
        return false;
    }

    public function update()
    {
        $query = 'UPDATE ' . $this->table . ' 
        SET
            name = :name, 
            author = :author, 
            genre = :genre, 
            language = :language 
        WHERE 
            id = :id; ';

        $stmt = $this->conn->prepare($query);

        $this->id = htmlspecialchars(strip_tags($this->id));
        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->author = htmlspecialchars(strip_tags($this->author));
        $this->genre = htmlspecialchars(strip_tags($this->genre));
        $this->language = htmlspecialchars(strip_tags($this->language));

        $stmt->bindParam(':id', $this->id);
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':author', $this->author);
        $stmt->bindParam(':genre', $this->genre);
        $stmt->bindParam(':language', $this->language);

        if ($stmt->execute()) {
            return true;
        }

        printf("error: %s.\n, $stmt->error");
        return false;
    }

    public function delete()
    {
        $query = 'DELETE FROM ' . $this->table . ' WHERE id = :id;';

        $stmt = $this->conn->prepare($query);

        $this->id = htmlspecialchars(strip_tags($this->id));

        $stmt->bindParam(':id', $this->id);

        if ($stmt->execute()) {
            return true;
        }

        printf("error: %s.\n,$stmt->error");
        return false;
    }
}

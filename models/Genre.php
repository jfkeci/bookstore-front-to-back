<?php

class Genre
{

    private $conn;
    private $table = 'genres';

    public $id;
    public $genre;
    public $created_at;

    public function __construct($db)
    {
        $this->conn = $db;
    }


    public function read()
    {
        $query = 'SELECT * FROM ' . $this->table . ' ORDER BY id DESC; ';

        $stmt = $this->conn->prepare($query);

        $stmt->execute();

        return $stmt;
    }

    public function read_single()
    {
        $query = 'SELECT * FROM ' . $this->table . ' WHERE id = ?; ';

        $stmt = $this->conn->prepare($query);

        $this->id = htmlspecialchars(strip_tags($this->id));

        $stmt->bindParam(1, $this->id);

        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->id = $row['id'];
        $this->genre = $row['genre'];
        $this->created_at = $row['created_at'];
    }

    public function create()
    {
        $query = 'INSERT INTO ' . $this->table . ' SET genre = :genre; ';

        $stmt = $this->conn->prepare($query);

        $this->genre = htmlspecialchars(strip_tags($this->genre));

        $stmt->bindParam(':genre', $this->genre);

        if ($stmt->execute()) {
            return true;
        }

        printf("error: %s.\n, $stmt->error");
        return false;
    }

    public function update()
    {
        $query = 'UPDATE ' . $this->table . ' SET 
            genre = :genre 
        WHERE 
            id = :id;';

        $stmt = $this->conn->prepare($query);

        $this->id = htmlspecialchars(strip_tags($this->id));
        $this->genre = htmlspecialchars(strip_tags($this->genre));

        $stmt->bindParam(':id', $this->id);
        $stmt->bindParam(':genre', $this->genre);

        $stmt->execute();

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

        $stmt->execute();

        if ($stmt->execute()) {
            return true;
        }

        printf("error: %s.\n, $stmt->error");
        return false;
    }
}

<?php

class Author
{

    private $conn;
    private $table = 'authors';

    public $id;
    public $name;
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
        $this->name = $row['name'];
        $this->created_at = $row['created_at'];
    }

    public function create()
    {
        $query = 'INSERT INTO ' . $this->table . ' SET name = :name; ';

        $stmt = $this->conn->prepare($query);

        $this->name = htmlspecialchars(strip_tags($this->name));

        $stmt->bindParam(':name', $this->name);

        if ($stmt->execute()) {
            return true;
        }

        printf("error: %s.\n, $stmt->error");
        return false;
    }

    public function update()
    {
        $query = 'UPDATE ' . $this->table . ' SET 
            name = :name 
        WHERE 
            id = :id;';

        $stmt = $this->conn->prepare($query);

        $this->id = htmlspecialchars(strip_tags($this->id));
        $this->name = htmlspecialchars(strip_tags($this->name));

        $stmt->bindParam(':id', $this->id);
        $stmt->bindParam(':name', $this->name);

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

<?php

class User
{

    private $conn;
    private $table = 'users';

    public $id;
    public $username;
    public $email;
    public $password;
    public $country;
    public $zip_code;
    public $city;
    public $address;
    public $created_at;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function read()
    {
        $query = 'SELECT * FROM ' . $this->table . ';';

        $stmt = $this->conn->prepare($query);

        $stmt->execute();

        return $stmt;
    }

    public function read_single()
    {
        $query = 'SELECT * FROM ' . $this->table . ' WHERE id = ?;';

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(1, $this->id);

        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->id = $row['id'];
        $this->username = $row['username'];
        $this->email = $row['email'];
        $this->password = $row['password'];
        $this->country = $row['country'];
        $this->zip_code = $row['zip_code'];
        $this->city = $row['city'];
        $this->address = $row['address'];
        $this->created_at = $row['created_at'];
    }

    public function create()
    {
        $query = 'INSERT INTO ' . $this->table . ' SET 
            username = :username, 
            email = :email, 
            password = :password, 
            country = :country, 
            zip_code = :zip_code,
            city = :city,
            address = :address ;';

        $stmt = $this->conn->prepare($query);

        $this->username = htmlspecialchars(strip_tags($this->username));
        $this->email = htmlspecialchars(strip_tags($this->email));
        $this->password = htmlspecialchars(strip_tags($this->password));
        $this->country = htmlspecialchars(strip_tags($this->country));
        $this->zip_code = htmlspecialchars(strip_tags($this->zip_code));
        $this->city = htmlspecialchars(strip_tags($this->city));
        $this->address = htmlspecialchars(strip_tags($this->address));

        $stmt->bindParam(':username', $this->username);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':password', $this->password);
        $stmt->bindParam(':country', $this->country);
        $stmt->bindParam(':zip_code', $this->zip_code);
        $stmt->bindParam(':city', $this->city);
        $stmt->bindParam(':address', $this->address);

        if ($stmt->execute()) {
            return true;
        }

        printf("error: %s.\n, $stmt->error");
        return false;
    }

    public function update()
    {
        $query = 'UPDATE ' . $this->table . ' SET 
            username = :username, 
            email = :email, 
            password = :password, 
            country = :country, 
            zip_code = :zip_code,
            city = :city,
            address = :address 
        WHERE
            id = :id ;';

        $stmt = $this->conn->prepare($query);

        $this->id = htmlspecialchars(strip_tags($this->id));
        $this->username = htmlspecialchars(strip_tags($this->username));
        $this->email = htmlspecialchars(strip_tags($this->email));
        $this->password = htmlspecialchars(strip_tags($this->password));
        $this->country = htmlspecialchars(strip_tags($this->country));
        $this->zip_code = htmlspecialchars(strip_tags($this->zip_code));
        $this->city = htmlspecialchars(strip_tags($this->city));
        $this->address = htmlspecialchars(strip_tags($this->address));

        $stmt->bindParam(':id', $this->id);

        $stmt->bindParam(':username', $this->username);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':password', $this->password);
        $stmt->bindParam(':country', $this->country);
        $stmt->bindParam(':zip_code', $this->zip_code);
        $stmt->bindParam(':city', $this->city);
        $stmt->bindParam(':address', $this->address);

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

        $stmt->bindParam(':id', $this->id);

        if ($stmt->execute()) {
            return true;
        }

        printf("error: %s.\n, $stmt->error");
        return false;
    }

    public function login()
    {
        $query = 'SELECT * FROM ' . $this->table . ' WHERE email = :email AND password = :password;';

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':password', $this->password);

        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!empty($row)) {
            $this->id = $row['id'];
            $this->username = $row['username'];
            $this->email = $row['email'];
            $this->password = $row['password'];
            $this->country = $row['country'];
            $this->zip_code = $row['zip_code'];
            $this->city = $row['city'];
            $this->address = $row['address'];
            $this->created_at = $row['created_at'];

            return true;
        }
        return false;
    }
}

<?php
class Connection
{
    private $connection;
    public function __construct()
    {
        $user = "root";
        $pass = "";
        $host = "localhost";
        $datab = "crud";
        $this->connection = mysqli_connect($host, $user, $pass);
        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
        mysqli_select_db($this->connection, $datab);
    }
    public function createUser($name, $email, $phone)
    {
        mysqli_query($this->connection, "INSERT INTO usuarios(nom,correo,tel) VALUES('$name','$email','$phone')");
    }
    public function readUsers()
    {
        $query = mysqli_query($this->connection, "SELECT * FROM usuarios ORDER BY cod asc");
        $users = [];
        while ($user = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
            array_push($users, $user);
        }
        return $users;
    }
    public function readUser($cod)
    {
        $query = mysqli_query($this->connection, "SELECT * FROM usuarios WHERE cod = $cod");
        $user = mysqli_fetch_array($query, MYSQLI_ASSOC);
        return $user;
    }
    public function updateUser($cod, $name, $email, $phone)
    {
        mysqli_query($this->connection, "UPDATE usuarios SET nom='$name',correo='$email',tel='$phone' WHERE cod=$cod");
    }
    public function deleteUser($cod)
    {
        mysqli_query($this->connection, "DELETE FROM usuarios WHERE cod=$cod");
    }
}

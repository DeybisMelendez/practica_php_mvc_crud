<?php
require_once("models/Connection.php");
class Controller
{
    private $connection;

    public function __construct()
    {
        $this->connection = new Connection();
        session_start();
    }
    public function routeHandler()
    {
        $request = strtok($_SERVER['REQUEST_URI'], "?");
        switch ($request) {
            case "/":
                $this->index();
                break;
            case "/edit":
                $this->edit();
                break;
            case "/new":
                $this->new();
                break;
            default:
                $this->error404();
                break;
        }
    }
    public function index()
    {
        if (!empty($_GET["delete"])) {
            $this->connection->deleteUser($_GET["delete"]);
            header("Location: /");
            die();
        }
        $_SESSION["users"] = $this->connection->readUsers();
        require "views/index.php";
    }
    public function edit()
    {
        $cod = $_POST["cod"];
        $name = $_POST["nom"];
        $email = $_POST["correo"];
        $phone = $_POST["tel"];
        if (!empty($cod) && !empty($name) && !empty($email) && !empty($phone)) {
            $this->connection->updateUser($cod, $name, $email, $phone);
            header("Location: /");
            die();
        } else if (!empty($_GET["cod"])) {
            $_SESSION["edit"] = $this->connection->readUser($_GET["cod"]);
            if (!isset($_SESSION["edit"])) {
                $this->error404();
            }
        }
        require "views/edit.php";
    }
    public function new()
    {
        $name = $_POST["nom"];
        $email = $_POST["correo"];
        $phone = $_POST["tel"];
        if (!empty($name) && !empty($email) && !empty($phone)) {
            $this->connection->createUser($name, $email, $phone);
            header("Location: /");
            die();
        } else {
            require "views/new.php";
        }
    }
    public function error404()
    {
        http_response_code(404);
        require "views/404.php";
    }
}

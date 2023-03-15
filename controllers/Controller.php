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
            case "/save":
                $this->save();
                break;
            case "/delete":
                $this->delete();
            case "/add":
                $this->add();
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
        $_SESSION["users"] = $this->connection->readUsers();
        require "views/index.php";
    }
    public function edit()
    {
        $_SESSION["edit"] = $this->connection->readUser($_GET["cod"]);
        if (isset($_SESSION["edit"])) {
            require "views/edit.php";
        } else {
            $this->error404();
        }
    }
    public function save()
    {
        $cod = $_POST["cod"];
        $name = $_POST["nom"];
        $email = $_POST["correo"];
        $phone = $_POST["tel"];
        if (empty($cod) || empty($name) || empty($email) || empty($phone)) {
            $this->error404();
        } else {
            $this->connection->updateUser($cod, $name, $email, $phone);
            header("Location: /");
            die();
        }
    }
    public function delete()
    {
        $cod = $_GET["cod"];
        if (empty($cod)) {
            $this->error404();
        } else {
            $this->connection->deleteUser($cod);
            header("Location: /");
            die();
        }
    }
    public function new()
    {
        require "views/new.php";
    }
    public function add()
    {
        $name = $_POST["nom"];
        $email = $_POST["correo"];
        $phone = $_POST["tel"];
        if (empty($name) || empty($email) || empty($phone)) {
            $this->error404();
        } else {
            $this->connection->createUser($name, $email, $phone);
            header("Location: /");
            die();
        }
    }
    public function error404()
    {
        http_response_code(404);
        require "views/404.php";
    }
}

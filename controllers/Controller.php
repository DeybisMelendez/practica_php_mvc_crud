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
            case "/new":
                $this->new();
                break;
            case "/api":
                $this->apiUser();
                break;
            default:
                $this->error404();
                break;
        }
    }
    private function index()
    {
        $this->new();
        $this->edit();
        $this->delete();
        $_SESSION["users"] = $this->connection->readUsers();
        require "views/index.php";
    }
    private function apiUser()
    {
        $user = $this->connection->readUser($_GET["user"]);
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($user);
    }
    private function edit()
    {
        $cod = $_POST["editcod"];
        $name = $_POST["editnom"];
        $email = $_POST["editcorreo"];
        $phone = $_POST["edittel"];
        if (!empty($cod) && !empty($name) && !empty($email) && !empty($phone)) {
            $this->connection->updateUser($cod, $name, $email, $phone);
            header("Location: /");
            die();
        }
    }
    private function delete()
    {
        if (!empty($_GET["delete"])) {
            $this->connection->deleteUser($_GET["delete"]);
            header("Location: /");
            die();
        }
    }
    private function new()
    {
        $name = $_POST["newnom"];
        $email = $_POST["newcorreo"];
        $phone = $_POST["newtel"];
        if (!empty($name) && !empty($email) && !empty($phone)) {
            $this->connection->createUser($name, $email, $phone);
            header("Location: /");
            die();
        }
    }
    private function error404()
    {
        http_response_code(404);
        require "views/404.php";
    }
}

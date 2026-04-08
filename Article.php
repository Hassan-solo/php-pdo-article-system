


<?php

require_once "connection.php";


class Article
{

    private $conn;

    public function __construct()
    {
        $db = new Database();
        $this->conn = $db->connection();
    }

    public   function readAll()
    {

        $sql = "SELECT * FROM articles";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public function createArticle($title, $content)
    {


        $sql = "INSERT into articles (title , content) VALUES (:title , :content)";
        $stmt = $this->conn->prepare($sql);

        $stmt->execute([

            "title" => $title,
            "content" => $content
        ]);
    }

    public function Update($id, $title, $content, $created_at)
    {
        $sql = "UPDATE articles set title=:title , content=:content , created_at=:created_at Where id=:id";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute([

            "id" => $id,
            "title" => $title,
            "content" => $content,
            "created_at" => $created_at

        ]);
    }

    public function deleted($id)
    {

        $sql = "DELETE FROM articles where id=:id";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute([

            "id" => $id
        ]);
    }


    public function getById($id)
    {
        $sql = "SELECT * FROM articles WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(["id" => $id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}




?>
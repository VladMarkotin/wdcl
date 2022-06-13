<?php
namespace App\Model;


use App\Model\Model;

class SecondTaskModel extends Model
{
    private $pdo = null;

    public function __construct()
    {
        $this->pdo = $this->getDBH();
    }

    public function firstQuery()
    {
        $query  = "SELECT b.title, a.name FROM `books` b JOIN authors a ON b.author_id = a.id";
        $result = $this->pdo->query($query);
         while($row = $result->fetch(\PDO::FETCH_ASSOC)){
            $data[] = $row;
         }
         //die(print_r($data));

         return $data;
    }

    public function secondQuery()
    {
        $query  = "SELECT authors.name FROM `authors` LEFT JOIN books ON authors.id = books.author_id
                       WHERE books.author_id IS NULL";
        $result = $this->pdo->query($query);
         while($row = $result->fetch(\PDO::FETCH_ASSOC)){
            $data[] = $row;
         }
         //die(print_r($data));

         return $data;
    }

    public function thirdQuery()
    {
        $query  = "SELECT authors.name FROM `authors` JOIN books ON authors.id = books.author_id
                       GROUP BY books.author_id HAVING COUNT(books.author_id) > 1";
        $result = $this->pdo->query($query);
        while($row = $result->fetch(\PDO::FETCH_ASSOC)){
            $data[] = $row;
        }
         //die(print_r($data));

         return $data;
    }
}
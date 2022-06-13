<?php
namespace App\Model;


use App\Model\Model;

class CategoryModel extends Model
{
     public function getData()
     {
         $data  = [];
         $query  = "SELECT * FROM categories";
         $pdo    = $this->getDBH();
         $result = $pdo->query($query);
         while($row = $result->fetch(\PDO::FETCH_ASSOC)){
            $data[] = $row;
         }
         //die(print_r($data));

         return $data;
     }
}
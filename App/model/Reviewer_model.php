<?php

namespace Staditek\App\model;

use Staditek\App\config\Database;

class Reviewer_model extends Database
{
    public function getAll()
    {
        $statement = self::$conn->prepare('SELECT * FROM reviewer');
        $statement->execute();

        return $statement->fetchAll(\PDO::FETCH_OBJ);
    }

    public function whereId($id)
    {
        $statement = self::$conn->prepare('SELECT * FROM reviewer WHERE id = :id');
        $statement->execute(['id' => $id]);

        return $statement->fetch(\PDO::FETCH_OBJ);
    }

    public function insert($data)
    {
        $statement = self::$conn->prepare(
            '
            INSERT INTO reviewer (firstName, lastName, email, password) 
            VALUES(:firstName, :lastName, :email, :password)
            '
        );

        return $statement->execute($data);
    }

    public function update($data)
    {
        $statement = self::$conn->prepare(
            '
            UPDATE reviewer 
            SET 
            firstName = :firstName, 
            lastName = :lastName, 
            email = :email, 
            password = :password, 
            updatedAt = :updatedAt  
            WHERE id = :id
            '
        );

        return $statement->execute($data);
    }

    public function delete($id)
    {
        $statement = self::$conn->prepare('DELETE FROM reviewer WHERE id = :id ');

        return $statement->execute(['id' => $id]);
    }
}
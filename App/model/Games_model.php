<?php

namespace Staditek\App\model;

use Staditek\App\config\Database;

class Games_model extends Database
{
    public function getAll()
    {
        $statement = self::$conn->prepare('SELECT * FROM games');
        $statement->execute();

        return $statement->fetchAll(\PDO::FETCH_OBJ);
    }

    public function whereId($id)
    {
        $statement = self::$conn->prepare('SELECT * FROM games WHERE id = :id');
        $statement->execute(['id' => $id]);

        return $statement->fetch(\PDO::FETCH_OBJ);
    }

    public function insert($data)
    {
        $statement = self::$conn->prepare(
            '
            INSERT INTO games (title, genre, cover, developer, publisher, realease_date, platform) 
            VALUES(:title, :genre, :cover, :developer, :publisher, :release_date, :platform)
            '
        );

        return $statement->execute($data);
    }

    public function update($data)
    {
        $statement = self::$conn->prepare(
            '
            UPDATE games 
            SET 
            title = :title, 
            genre = :genre, 
            cover = :cover, 
            developer = :developer, 
            publisher = :publisher,
            release_date = :release_date,
            platform = :platform,
            updatedAt = :updatedAt  
            WHERE id = :id
            '
        );

        return $statement->execute($data);
    }

    public function delete($id)
    {
        $statement = self::$conn->prepare('DELETE FROM games WHERE id = :id ');

        return $statement->execute(['id' => $id]);
    }
}
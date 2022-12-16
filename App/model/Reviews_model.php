<?php

namespace Staditek\App\model;

use Staditek\App\config\Database;

class Reviews_model extends Database
{
    public function getAll()
    {
        $statement = self::$conn->prepare(
            '
            SELECT 
            reviews.reviewer_id, reviewer.firstName, reviewer.lastName, reviewer.email, reviewer.password,
            reviews.games_id ,games.title,  games.genre, games.cover, games.developer, games.publisher, games.release_date,
            reviews.id, reviews.review, reviews.verdict, reviews.createdAt, reviews.updatedAt
            FROM reviews
            INNER JOIN reviewer ON reviews.reviewer_id = reviewer.id
            INNER JOIN games ON reviews.games_id = games.id
            '
        );
        $statement->execute();

        return $statement->fetchAll(\PDO::FETCH_OBJ);
    }

    public function whereId($id)
    {
        $statement = self::$conn->prepare(
            '
            SELECT 
            reviews.reviewer_id, reviewer.firstName, reviewer.lastName, reviewer.email, reviewer.password,
            reviews.games_id ,games.title,  games.genre, games.cover, games.developer, games.publisher, games.release_date,
            reviews.id, reviews.review, reviews.verdict, reviews.createdAt, reviews.updatedAt
            FROM reviews
            INNER JOIN reviewer ON reviews.reviewer_id = reviewer.id
            INNER JOIN games ON reviews.games_id = games.id
            WHERE games.id = :id
            '
        );
        $statement->execute(['id' => $id]);

        return $statement->fetch(\PDO::FETCH_OBJ);
    }

    public function insert($data)
    {
        $statement = self::$conn->prepare(
            '
            INSERT INTO reviews (reviewer_id, games_id, review, verdict) 
            VALUES(:reviewer_id, :games_id, :review, :verdict)
            '
        );

        return $statement->execute($data);
    }

    public function update($data)
    {
        $statement = self::$conn->prepare(
            '
            UPDATE reviews 
            SET 
            reviewer_id = :reviewer_id,
            games_id = :games_id,
            review = :review, 
            verdict = :verdict, 
            updatedAt = :updatedAt  
            WHERE id = :id
            '
        );

        return $statement->execute($data);
    }

    public function delete($id)
    {
        $statement = self::$conn->prepare('DELETE FROM reviews WHERE id = :id ');

        return $statement->execute(['id' => $id]);
    }
}
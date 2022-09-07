<?php

class PDOPostRepository implements PostRepository
{
    private $db;
    public function __construct(PDO $db)
    {
//        $this->db = new PDO(
//            'mysql:host=localhost;dbname=my_database',
//            'a_username',
//            '4_p4ssw0rd',
//            [
//                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4',
//            ]
//        );
        $this->db = $db;
    }

    public function byId(PostId $id)
    {
        $stm = $this->db->prepare(
            'SELECT * FROM posts WHERE id = ?'
        );
        $stm->execute([$id->id()]);
        return recreateFrom($stm->fetch());
    }

    public function add(Post $post)
    {
//        $this->db->beginTransaction();
//        try {
            $stm = $this->db->prepare(
                'INSERT INTO posts (title, content) VALUES (?, ?)'
            );
            $stm->execute([
                $post->title(),
                $post->content(),
            ]);
//            $this->db->commit();
//        } catch (Exception $e) {
//            $this->db->rollback();
//            throw new UnableToCreatePostException($e);
//        }
    }
}

<?php

require_once '../Models/Post.php';
require_once '../Models/SQLRequest.php';

class PostManager extends SQLRequest
{

    // CRUD SYSTEM

    /**
     * @param array $data
     * @return void
     */
    public function create(Post $data)
    {
        $title = $data->getTitle();
        $author = $data->getAuthor();
        $contents = $data->getContents();

        $sql = 'INSERT INTO blogAlaska(title, author, contents, dateContents)
                VALUES(:title, :author, :contents, NOW() )';

        $dbh = $this->getDatabase()->prepare($sql);
        $dbh->bindParam(':title', $title, PDO::PARAM_STR);
        $dbh->bindParam(':author', $author, PDO::PARAM_STR);
        $dbh->bindParam(':contents', $contents, PDO::PARAM_STR);

        $dbh->execute();
    }

    /**
     * @param $id
     * @return object Post
     */
    public function read(int $id)
    {
        $sql = 'SELECT * FROM blogAlaska WHERE id = :id';
        $dbh = $this->getDatabase()->prepare($sql);
        $dbh->bindParam(':id', $id, PDO::PARAM_INT);
        $dbh->execute();
        $data = $dbh->fetch(PDO::FETCH_ASSOC);
        
        if ( $data != FALSE){
            return new Post($data);
        } else {
            return FALSE;
        }
    }

    /**
     *
     *
     */
    public function update()
    {

    }

    /**
     *
     *
     */
    public function delete()
    {
        
    }

    // OTHERS METHODS

    /**
     * @param void
     * @return array Object Post
     */
    public function readAllPost()
    {
        $postList = [];
        $sql  = 'SELECT * FROM blogAlaska';
        $dbh  = $this->getDatabase()->query($sql);
        $data = $dbh->fetchAll(PDO::FETCH_ASSOC);

        foreach ( $data as $post ) {
            $postList[] = new Post($post);
        }

        return $postList;
    }
}
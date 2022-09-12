<?php

class Post
{
    private $title;
    private $content;
    public static function writeNewFrom($title, $content)
    {
        return new static($title, $content);
    }
    private function __construct($title, $content)
    {
        $this->setTitle($title);
        $this->setContent($content);
    }
    private function setTitle($title)
    {
        if (empty($title)) {
            throw new RuntimeException('Title cannot be empty');
        }
        $this->title = $title;
    }
    private function setContent($content)
    {
        if (empty($content)) {
            throw new RuntimeException('Content cannot be empty');
        }
        $this->content = $content;
    }


    private function AddItem()
    {
//        INSERT into todolist ('vhjhjd', jdhjdhj, 'hdhdjhd');
//        SELECT
//        INNER JOIN
    }
}


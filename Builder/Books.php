<?php

/**
 * Class Books
 */
class Books
{
    /** @var  string */
    private $author;

    /** @var  string */
    private $titles = [];
    
    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * @param string $author
     * @return $this
     */
    public function setAuthor(string $author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitles(): string
    {
        return $this->titles;
    }

    /**
     * @param string $title
     * @return $this
     */
    public function setTitle(string $title)
    {
        $this->titles[] = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getAllBooks(): string
    {
        return sprintf(
            '%s wrote the following books: %s',
            $this->getAuthor(),
            implode(', ', $this->getTitles())
        );
    }
}
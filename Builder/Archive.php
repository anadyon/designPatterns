<?php

/**
 * Class Archive
 */
class Archive
{
    /**
     * @param BuilderInterface $builder
     * @return Books
     */
    public function build(BuilderInterface $builder) : Books
    {
        return $builder
            ->createBooks()
            ->setAuthor()
            ->setTitles()
            ->getBooks()
            ->getAllBooks();
    }
}
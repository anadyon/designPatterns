<?php

/**
 * Interface BuilderInterface
 */
interface BuilderInterface
{
    /**
     * @return BuilderInterface
     */
    public function createBooks() : BuilderInterface;

    /**
     * @return Books
     */
    public function getBooks() : Books;

    /**
     * @return BuilderInterface
     */
    public function setAuthor() : BuilderInterface;

    /**
     * @return BuilderInterface
     */
    public function setTitles() : BuilderInterface;
}
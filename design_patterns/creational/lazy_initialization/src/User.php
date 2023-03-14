<?php

namespace DesignPatterns\Creational\LazyInitialization;

/**
 * User model which calls a resource intense repository method to get posts.
 */
class User
{
    /** @var array Post items */
    private $posts;

    public $data;

    /** @var \Closure Reference to a user repository */
    private \Closure $reference;

    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Set reference to a user repository method with Closure.
     *
     * @param Closure
     */
    public function setReference(\Closure $reference)
    {
        $this->reference = $reference;
    }

    /**
     * Get array of items retrieved from the database with the method call of
     * the repository. The retrieval from the database happens only once with
     * the help of lazy loading and therefore improves performance.
     *
     * @return array
     */
    public function getPosts()
    {
        if (!isset($this->posts)) {
            $reference = new \ReflectionFunction($this->reference);

            $this->posts =  $reference->invoke();
        }

        return $this->posts;
    }
}

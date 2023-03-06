<?php

namespace DesignPattern\Creational\LazyInitialization;

/**
 * Repository of users from the database.
 */
class UserRepository
{
    /** @var mixed Reference to a database or ORM database manager object. */

    // ... Example is simplified for readability.

    /**
     * Get user and set the reference to call when requiring posts from the
     * database by the given ID.
     *
     * @param int $id
     *
     * @return User
     */
    public function findOneById($id)
    {
        $user = new User([
            'id' => $id
        ]);

        $reference = function () use ($id) {
            $allPostData = [
                1 => [
                    [
                        'id' => 1,
                        'title' => 'title_1'
                    ],
                    [
                        'id' => 2,
                        'title' => 'title_2'
                    ],
                ],
                2 => [
                    [
                        'id' => 3,
                        'title' => 'title_3'
                    ],
                    [
                        'id' => 4,
                        'title' => 'title_4'
                    ],
                ],
            ];

            $userPostData = $allPostData[$id] ?? [];

            $posts = [];
            foreach ($userPostData as $postData) {
                $posts[] = $postData;
            }

            return $posts;
        };

        $user->setReference($reference);

        return $user;
    }
}

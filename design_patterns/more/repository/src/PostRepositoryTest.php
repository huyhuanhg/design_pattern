<?php

declare(strict_types=1);

namespace DesignPatterns\More\Repository;

class PostRepositoryTest
{
    public function __construct(private PostRepository $repository)
    {
    }

    public function testCanGenerateId()
    {
        dump($this->repository->generateId()->toInt());
    }

    public function testThrowsExceptionWhenTryingToFindPostWhichDoesNotExist()
    {
        $this->repository->findById(PostId::fromInt(42));
    }

    public function testCanPersistPostDraft()
    {
        $postId = $this->repository->generateId();
        $post = Post::draft($postId, 'Repository Pattern', 'Design Patterns PHP');
        $this->repository->save($post);

        $this->repository->findById($postId);

        dump($postId, $this->repository->findById($postId)->getId());
        dump(PostStatus::STATE_DRAFT, $post->getStatus()->toString());
    }
}

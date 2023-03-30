<?php

namespace App\Repositories\Implementations;

use App\Models\Comment;
use App\Repositories\Interfaces\CommentRepositoryInterface;

class CommentRepository implements CommentRepositoryInterface
{
    public function all()
    {
        return Comment::all();
    }

    public function store(array $input, $entity)
    {
        return $entity->comments()->create($input);
    }

    public function delete(int $id)
    {
        return Comment::destroy($id);
    }

    public function find(int $id)
    {
        return Comment::findOrFail($id);
    }

    public function update(array $input, int $id)
    {
        $comment = Comment::find($id);
        $comment->update($input);

        return $comment;
    }
}

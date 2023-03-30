<?php

namespace App\Repositories\Interfaces;

interface CommentRepositoryInterface
{
    public function all();

    public function store(array $input, $entity);

    public function delete(int $id);

    public function find(int $id);

    public function update(array $input, int $id);
}

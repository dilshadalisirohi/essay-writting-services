<?php

namespace App\Repositories\Interfaces;

interface ContactRepositoryInterface
{
    public function all();

    public function store(array $input);

    public function delete(int $id);

    public function find(int $id);

    public function update(array $input, int $id);
}

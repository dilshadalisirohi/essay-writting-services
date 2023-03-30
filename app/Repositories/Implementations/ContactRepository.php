<?php

namespace App\Repositories\Implementations;

use App\Models\Contact;
use App\Repositories\Interfaces\ContactRepositoryInterface;

class ContactRepository implements ContactRepositoryInterface
{
    public function all()
    {
        return Contact::all();
    }

    public function store(array $input)
    {
        return Contact::create($input);
    }

    public function delete(int $id)
    {
        return Contact::destroy($id);
    }

    public function find(int $id)
    {
        return Contact::findOrFail($id);
    }

    public function update(array $input, int $id)
    {
        $comment = Contact::find($id);
        $comment->update($input);

        return $comment;
    }
}

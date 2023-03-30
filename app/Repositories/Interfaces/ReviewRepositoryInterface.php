<?php

namespace App\Repositories\Interfaces;

interface ReviewRepositoryInterface
{
    public function all();

    public function getReviewBySlug(string $slug);

    public function getReviewList(int $countReviews, string $searchable = '');

    public function store(array $input, array $faqs = [], array $advantages = [], array $disAdvantages = [], array $related = []);

    public function find(int $id);

    public function updateReview(int $id, array $input, array $faqs = [], array $advantages = [], array $disAdvantages = [], array $related = []);

    public function delete(int $id);

}

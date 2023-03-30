<?php

namespace App\Repositories\Interfaces;

interface ArticleRepositoryInterface
{
    public function all();

    public function find($id);

    public function getArticleBySlug($slug);

    public function getArticleList();

    public function store(array $input, array $faqs = [], array $advantages = [], array $disAdvantages = [], array $related = []);

    public function update(int $id, array $input, array $faqData = [], array $advantagesData = [], array $disAdvantagesData= [], array $relatedData = []);

    public function delete(int $id);
}

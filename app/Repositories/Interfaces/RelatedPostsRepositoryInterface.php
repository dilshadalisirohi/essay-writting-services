<?php

namespace App\Repositories\Interfaces;

interface RelatedPostsRepositoryInterface
{
    public function getAllWritingPostsThumbnailWithCheckedFlag(int $originPostId = 0);
}

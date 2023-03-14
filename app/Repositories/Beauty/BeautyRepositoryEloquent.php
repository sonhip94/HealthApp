<?php

namespace App\Repositories\Beauty;

use App\Models\Beauty;
use App\Repositories\BaseRepository;

class BeautyRepositoryEloquent extends BaseRepository implements BeautyRepositoryInterface
{
    public function __construct(Beauty $beauty)
    {
        parent::__construct($beauty);
    }

    public function randEightBeautyItems()
    {
        return $this->model->inRandomOrder()->limit(8)->get();
    }
}

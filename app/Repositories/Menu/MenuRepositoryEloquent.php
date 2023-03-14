<?php

namespace App\Repositories\Menu;

use App\Models\Menu as MenuModel;
use App\Repositories\BaseRepository;

class MenuRepositoryEloquent extends BaseRepository implements MenuRepositoryInterface
{
    public function __construct(MenuModel $menu)
    {
        parent::__construct($menu);
    }

    public function randEightMenuItems()
    {
        return $this->model->inRandomOrder()->limit(8)->get();
    }
}

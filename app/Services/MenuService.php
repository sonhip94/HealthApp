<?php

namespace App\Services;

use App\Repositories\Menu\MenuRepositoryInterface;
use Illuminate\Support\Facades\DB;
use Exception;
use App\Models\Menu;

class MenuService
{
    protected $menuRepository;

    public function __construct(MenuRepositoryInterface $menuRepository) {
        $this->menuRepository = $menuRepository;
    }

    public function menuRand()
    {
        return $this->menuRepository->randEightMenuItems();
    }
}

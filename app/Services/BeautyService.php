<?php

namespace App\Services;

use App\Repositories\Beauty\BeautyRepositoryInterface;
use Illuminate\Support\Facades\DB;
use Exception;
use App\Models\Beauty;

class BeautyService
{
    protected $beautyRepository;

    public function __construct(BeautyRepositoryInterface $beautyRepository) {
        $this->beautyRepository = $beautyRepository;
    }

    public function beautyRand()
    {
        return $this->beautyRepository->randEightBeautyItems();
    }
}

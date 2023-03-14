<?php

namespace App\Http\Controllers\API\Beauty;

use Illuminate\Http\Request;
use App\Models\Beauty;
use App\Http\Controllers\Controller;
use App\Services\BeautyService;

class BeautyController extends Controller
{
    protected $beautyService;

    public function __construct (BeautyService $beautyService) {
        $this->beautyService = $beautyService;
    }

    public function showTypes(Request $request)
    {
        return response()->json([
            'beauty_types' => Beauty::TYPES,
        ]);
    }

    public function beautyRand(Request $request)
    {
        $beautyRand = $this->beautyService->beautyRand();

        return response()->json([
            'beauties' => $beautyRand,
        ]);
    }
}

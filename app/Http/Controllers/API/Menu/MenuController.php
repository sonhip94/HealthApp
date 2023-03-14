<?php

namespace App\Http\Controllers\API\Menu;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Http\Controllers\Controller;
use App\Services\MenuService;

class MenuController extends Controller
{
    protected $menuService;

    public function __construct (MenuService $menuService) {
        $this->menuService = $menuService;
    }

    public function showTypes(Request $request)
    {
        return response()->json([
            'menu_types' => Menu::TYPES,
        ]);
    }

    public function menuRand(Request $request)
    {
        $menuRand = $this->menuService->menuRand();

        return response()->json([
            'menus' => $menuRand,
        ]);
    }
}

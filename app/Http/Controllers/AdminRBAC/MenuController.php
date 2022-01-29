<?php

namespace App\Http\Controllers\AdminRBAC;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    public function index()
    {
        return view('pages.admin-rbac.menu');
    }

    public function refresh(Request $request)
    {   
        $order_cases = [];
        $parent_cases = [];
        $ids = [];
        foreach ($request->items as $item) {
            $order_cases[] = "WHEN {$item['id']} THEN {$item['order']}";
            if (isset($item['parent'])) {
                $parent_cases[] = "WHEN {$item['id']} THEN {$item['parent']}";   
            }

            $ids[] = $item['id'];
        }

        $ids = implode(',', $ids);
        $order_cases = implode(' ', $order_cases);
        $parent_cases = implode(' ', $parent_cases);
        
        if (!empty($ids)) {
            $parent_query = (!empty($parent_cases)) ? " ,`parent` = CASE `id_menu` {$parent_cases} END " : "";
            \DB::update("UPDATE rbac_menu 
                SET `order` = CASE `id_menu` {$order_cases} END 
                {$parent_query}
                WHERE `id_menu` IN ({$ids})");
        }
    }
}

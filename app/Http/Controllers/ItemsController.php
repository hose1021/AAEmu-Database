<?php

namespace App\Http\Controllers;

use DB;

class ItemsController extends Controller
{
    public function view()
    {
    	return view('pages.items.all');
    }

    public function List()
    {
        $items = DB::table('items')->select('items.id', 'icons.filename',  'tbl_name', 'tbl_column_name', 'ru', 'en_us', 'price')
            ->leftJoin('localized_texts', 'localized_texts.idx', '=', 'items.id')
            ->leftJoin('icons', 'items.icon_id', '=', 'icons.id')
            ->where('tbl_name', 'items')->where('en_us', '<>', '')->where('tbl_column_name', 'name')->orderBy('items.id');
        $items = [
            'data' => $items->get()->all()
        ];

        return json_encode($items);
    }
}


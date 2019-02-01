<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Cache;

class ItemsController extends Controller
{
    public function view()
    {
    	$items=$this->List();
    	return view('pages.items.all', ['items' => $items]);
    }

    public function List()
    {
    	$data = Cache::remember('items', 60, function () {
            return DB::table('items')
                ->select('items.id', 'icons.filename',  'tbl_name', 'tbl_column_name', 'ru', 'en_us', 'price')
                ->leftJoin('localized_texts', 'localized_texts.idx', '=', 'items.id')
                ->leftJoin('icons', 'items.icon_id', '=', 'icons.id')
                ->where('tbl_name', 'items')->where('en_us', '<>', '')->where('tbl_column_name', 'name')->orderBy('items.id')->get();
        });
        return json_decode(json_encode($data,true),true);
    }
}


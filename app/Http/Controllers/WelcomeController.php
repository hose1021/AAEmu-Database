<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class WelcomeController extends Controller
{
    public function view()
    {
    	$items=$this->List();
    	return view('welcome', ['items' => $items]);
    }

    // Elements list
    // with category_id = 125. For open all items list, delete "->where('category_id', '125')"
    // Category list in 'other" folder item_cat.txt

    public function List()
    {
    	$data=DB::table('items')
    			->select('items.id', 'tbl_name', 'tbl_column_name', 'ru', 'en_us')
    			->leftJoin('localized_texts', 'localized_texts.idx', '=', 'items.id')
    			->where('tbl_name', 'items')->where('ru', '<>', '')->where('category_id', '125')->where('tbl_column_name', 'name')->orderBy('items.id')->get();
    	return json_decode(json_encode($data,true),true);
    }
}


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ItemsController extends Controller
{
    public function view()
    {
    	$items=$this->List();
    	return view('welcome', ['items' => $items]);
    }

    public function List()
    {
    	$data=DB::table('items')
    			->select('items.id', 'tbl_name', 'tbl_column_name', 'ru', 'en_us', 'price')
    			->leftJoin('localized_texts', 'localized_texts.idx', '=', 'items.id')
    			->where('tbl_name', 'items')->where('ru', '<>', '')->where('tbl_column_name', 'name')->orderBy('items.id')->get();
    	return json_decode(json_encode($data,true),true);
    }
}


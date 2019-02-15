<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Datatables;

class ItemsController extends Controller
{
    public function view()
    {
        return view('pages.items.all');
    }

    public function getAll()
    {
        $result = DB::connection('sqlite')->table('items')->select('items.id','localized_texts.idx', 'localized_texts.en_us','localized_texts.ru', 'items.level', 'icons.filename', 'level', 'price', 'honor_price')
                    ->Join('icons', 'icons.id', '=', 'items.icon_id')
                    ->Join('localized_texts', 'items.id', '=', 'localized_texts.idx')
                    ->where('localized_texts.tbl_name', 'items')->where('en_us', '<>', '')->where('tbl_column_name', 'name')->latest()->get();
        $result = json_decode(json_encode($result, true), true);
        $result = $this->List($result);
        return Datatables::of($result)->make(true);
    }

    public function getAll_2()
    {
        $result = DB::connection('sqlite')->table('items')->select('items.id','localized_texts.idx', 'localized_texts.en_us','localized_texts.ru', 'items.level', 'icons.filename', 'level', 'price', 'honor_price')
                    ->Join('icons', 'icons.id', '=', 'items.icon_id')
                    ->Join('localized_texts', 'item s.id', '=', 'localized_texts.idx')
                    ->where('localized_texts.tbl_name', 'items')->where('en_us', '<>', '')->where('tbl_column_name', 'name')->latest()->get();
        $result = json_decode(json_encode($result, true), true);
        $result = $this->List($result);
        return $result;
    }

    public function List($items)
    {
        for ($i=0;$i<count($items);$i++){
            if(false !== stream_resolve_include_path( public_path() . '/img/icons/' . substr($items[$i]['filename'], 0, -4) . '.png'))
                $items[$i]['filename']='/icons/'.$items[$i]['filename'];
            else {
                $items[$i]['filename']="/empty.png";
            }
        }
        return $items;
    }

    public function Items_desc()
    {
        $desc = DB::connection('sqlite')->table('items')->select('localized_texts.idx', 'localized_texts.en_us','localized_texts.ru')
                     ->Join('localized_texts', 'items.id', '=', 'localized_texts.idx')
                     ->where('localized_texts.tbl_name', 'items')->where('tbl_column_name', 'description')->latest()->get();
        return $desc;
    }
}


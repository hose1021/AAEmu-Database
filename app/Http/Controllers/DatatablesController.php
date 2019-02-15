<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Datatables;

class DatatablesController extends Controller
{
    /**
     * Displays datatables front end view
     *
     * @return \Illuminate\View\View
     */
    public function view()
    {
        return view('pages.test');
    }

    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function anyData()
    {
        $haha = DB::connection('sqlite')->table('items')->select('items.id','localized_texts.idx', 'localized_texts.en_us','localized_texts.ru', 'items.level', 'icons.filename', 'level', 'price', 'honor_price', 'description')
                    ->Join('icons', 'icons.id', '=', 'items.icon_id')
                    ->Join('localized_texts', 'items.id', '=', 'localized_texts.idx')
                    ->where('localized_texts.tbl_name', 'items')->where('en_us', '<>', '')->where('tbl_column_name', 'name')->latest()->get();
        return Datatables::of($haha)->make(true);
    }
}
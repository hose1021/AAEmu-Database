<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Datatables;

class NpcsController extends Controller
{
    public function view()
    {
        return view('pages.npcs.all');
    }

    /**
     * @param int|null $grade
     * @param int|null $zoneId
     * @param int|null $slotEquip
     * @return mixed
     */

    public function List()
    {
        $result = DB::connection('sqlite')->table('npcs')->select('npcs.id', 'npcs.level', 'npcs.npc_grade_id', 'localized_texts.en_us', 'localized_texts.ru', 'npcs.trader', 'npcs.honor_point')
                    ->Join('localized_texts', 'localized_texts.idx', '=', 'npcs.id')
                    ->where('localized_texts.tbl_name', 'npcs')->where('localized_texts.en_us', '<>', '')->get();
        return Datatables::of($result)->make(true);
    }

}

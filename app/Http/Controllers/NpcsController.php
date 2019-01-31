<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NpcsController extends Controller
{
    public function view()
    {

    }

    public function all()
    {
        $npcs = $this->list();
        return view('npcs/all', compact('npcs'));
    }

    public function List(int $grade = null)
    {
        $data = DB::table('npcs')
            ->select('npcs.id', 'npcs.level', 'npcs.npc_grade_id', 'en_us', 'ru')
            ->leftJoin('localized_texts', 'localized_texts.idx', '=', 'npcs.id')
            ->where('tbl_name', 'npcs')->where('ru', '<>', '')
            ->get();
        return json_decode(json_encode($data, true), true);
    }

}

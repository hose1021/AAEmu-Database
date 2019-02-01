<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NpcsController extends Controller
{
    public function view()
    {

    }

    /**
     * @param int $gradeId
     * @param int $zoneId
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function npcs(int $gradeId = null, int $zoneId = null)
    {
        $npcs = $this->list($gradeId, $zoneId);
        return view('pages/npcs/all', compact('npcs'));
    }

    public function travel()
    {
        $npcs = $this->List(null, null, 1);
        return view('pages/npcs/all', compact('npcs'));
    }

    public function battlepets()
    {
        $npcs = $this->List(null, null, 2);
        return view('pages/npcs/all', compact('npcs'));
    }

    /**
     * @param int|null $grade
     * @param int|null $zoneId
     * @param int|null $slotEquip
     * @return mixed
     */
    private function List(int $grade = null, int $zoneId = null, int $slotEquip = null)
    {
        $data = DB::table('npcs')
            ->select('npcs.id', 'npcs.level', 'npcs.npc_grade_id', 'en_us', 'ru')
            ->leftJoin('localized_texts', 'localized_texts.idx', '=', 'npcs.id')
            ->where('tbl_name', 'npcs')->where('en', '<>', '');

        if (!is_null($slotEquip) && is_numeric($slotEquip)) {
            $data->where('mate_equip_slot_pack_id', '=', $slotEquip);
        }

        if (!is_null($grade) && is_numeric($grade)) {
            $data->where('npc_grade_id', '=', $grade);
        }

        if (!is_null($zoneId) && is_numeric($zoneId)) {
            //$data->leftJoin('') //left join ou parsing .dat (Game.pak => npc_data / sextant_data)
        }

        $data = $data->get();
        return json_decode(json_encode($data, true), true);
    }

}

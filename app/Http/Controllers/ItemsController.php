<?php

namespace App\Http\Controllers;

use App\Repositories\ItemRepository;

class ItemsController extends Controller
{


    /**
     * @var ItemRepository
     */
    private $itemRepository;

    public function __construct(ItemRepository $itemRepository)
    {
        $this->itemRepository = $itemRepository;
    }

    public function view()
    {
        return view('pages.items.all');
    }

    public function ShowItemByCategory($category)
    {
        $items = $this->itemRepository->getAllForCategory($category)->get()->all();
        $items = [
            'data' => $items
        ];
        return json_encode($items);
    }

    public function List()
    {
        $items = $this->itemRepository->getAll()->get();
        $items = json_decode(json_encode($items, true), true);
        for ($i=0;$i<count($items);$i++){
            if(false !== stream_resolve_include_path( public_path() . '/img/icons/' . substr($items[$i]['filename'], 0, -4) . '.png'))
                $items[$i]['filename']='/icons/'.$items[$i]['filename'];
            else {
                $items[$i]['filename']="empty.png";
            }
        }
        $items = [
            'data' => $items
        ];
        return $items;
    }

    public function test()
    {
        // $item = DB::connection('sqlite')->table('items')->select('items.id', 'localized_texts.en_us','localized_texts.ru', 'items.level', 'icons.filename')
        //     ->leftJoin('icons', 'items.icon_id', '=', 'icons.id')
        //     ->leftJoin('localized_texts', 'localized_texts.idx', '=', 'items.id')
        //     ->where('localized_texts.tbl_name', 'items')->where('en_us', '<>', '')->where('tbl_column_name', 'name')->latest();
        // // $users = DB::connection('mysql')->table('users')->select('username')->get();
    }
}


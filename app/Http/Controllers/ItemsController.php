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
            if(file_exists( public_path() . '/img/icons/' . substr($items[$i]['filename'], 0, -4) . '.png'))
                $items[$i]['filename']='icons/'.$items[$i]['filename'];
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
        $items = $this->itemRepository->getAll()->get();
        $items = json_decode(json_encode($items, true), true);
        for ($i=0;$i<count($items);$i++){
            if(file_exists( public_path() . '/img/icons/' . substr($items[$i]['filename'], 0, -4) . '.png'))
                echo 'icons/'.$items[$i]['filename'];
            else {
                echo "empty.png";
            }
        }
    }
}


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
        $items = [
            'data' => $items
        ];
        return json_encode($items);
    }
}


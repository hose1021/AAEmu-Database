<?php

namespace App\Repositories;

use App\Models\ItemCategory;
use App\Models\localizedText;
use Yajra\Datatables\Datatables;

class ItemRepository
{
    /**
     * @var ItemCategory
     */
    private $category;
    /**
     * @var localizedText
     */
    private $localizedText;

    public function __construct(ItemCategory $category, localizedText $localizedText)
    {
        $this->category = $category;
        $this->localizedText = $localizedText;
    }

    public function getAllForCategory($category_id)
    {
        return $this->getAll()->whereHas('Category', function ($q) use ($category_id) {
            $q->where('item_categories.id', $category_id);
        });
    }

    public function getArmorByEmplacment(){
        return $this->getAll();
    }

}

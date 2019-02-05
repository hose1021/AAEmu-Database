<?php


namespace App\Repositories;

use App\Models\Item;
use App\Models\ItemCategory;
use App\Models\localizedText;

class ItemRepository
{
    /**
     * @var Item
     */
    private $item;
    /**
     * @var ItemCategory
     */
    private $category;
    /**
     * @var localizedText
     */
    private $localizedText;

    public function __construct(Item $item, ItemCategory $category, localizedText $localizedText)
    {
        $this->item = $item;
        $this->category = $category;
        $this->localizedText = $localizedText;
    }

    public function getAll()
    {
        return $this->item->setConnection('sqlite')->select('items.id', 'localized_texts.en_us','localized_texts.ru', 'items.level', 'icons.filename', 'level', 'price', 'honor_price')
            ->leftJoin('icons', 'items.icon_id', '=', 'icons.id')
            ->leftJoin('localized_texts', 'localized_texts.idx', '=', 'items.id')
            ->where('localized_texts.tbl_name', 'items')->where('en_us', '<>', '')->where('tbl_column_name', 'name')->latest();
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

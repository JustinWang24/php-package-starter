<?php
/**
 * Created by https://yue.dev
 * Author: Justin Wang
 * Email: hi@yue.dev
 */

namespace Smartbro\PostOffice\impl\item;


use Smartbro\PostOffice\contracts\IPrice;
use Smartbro\PostOffice\contracts\IServiceItem;
use Smartbro\PostOffice\impl\price\Price;

class ProductItem implements IServiceItem
{
    protected $id;
    protected $code;
    protected $weight;
    protected $length;
    protected $width;
    protected $height;

    /**
     * @var IPrice[]
     */
    protected $items;

    public function __construct($data)
    {
        $this->id     = $data['id'];
        $this->code   = $data['code'];
        $this->weight = $data['weight'];
        $this->length = $data['length'];
        $this->width  = $data['width'];
        $this->height = $data['height'];

        foreach ($data['items'] as $item) {
            $this->items[] = new Price($item);
        }
    }

    public function getId()
    {
        return $this->id;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function getType()
    {
        return IServiceItem::TYPE_PRODUCT;
    }

    public function getWeightLimit()
    {
        return $this->weight;
    }

    public function getLengthLimit()
    {
        return $this->height;
    }

    public function getWidthLimit()
    {
        return $this->width;
    }

    public function getPrices()
    {
        return $this->items;
    }
}
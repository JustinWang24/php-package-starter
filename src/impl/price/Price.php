<?php
/**
 * Created by https://yue.dev
 * Author: Justin Wang
 * Email: hi@yue.dev
 */

namespace Smartbro\PostOffice\impl\price;


use Smartbro\PostOffice\contracts\IDiscount;
use Smartbro\PostOffice\contracts\IPrice;

class Price implements IPrice
{
    protected $type;
    protected $code;
    protected $price;

    /**
     * @var IDiscount[]
     */
    protected $discounts;

    public function __construct($data)
    {
        $this->type = $data['type'];
        $this->code = $data['code'];
        $this->price = $data['price'];
    }

    public function getType()
    {
        return $this->type;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function getValue()
    {
        $discountTotal = 0;
        foreach ($this->discounts as $discount) {
            $discountTotal += $discount->getValue();
        }
        return $this->price - $discountTotal;
    }

    public function attachDiscount(IDiscount $discount)
    {
        $this->discounts[] = $discount;
    }
}
<?php
/**
 * Created by https://yue.dev
 * Author: Justin Wang
 * Email: hi@yue.dev
 */

namespace Smartbro\PostOffice\impl\category;

use Smartbro\PostOffice\contracts\IDeliveryService;
use Smartbro\PostOffice\contracts\IDeliveryServiceCategory;
use Smartbro\PostOffice\Factory;

class Regular extends BasicCategory
{
    private $services = null;

    public function __construct($resource)
    {
        parent::__construct($resource, IDeliveryServiceCategory::REGULAR);
    }

    /**
     * 获取类别 包含的 服务
     * @return IDeliveryService[]
     */
    public function getServices()
    {
        if(is_null($this->services)){
            $this->services = [];
            foreach ($this->data['items'] as $item) {
                $this->services[$item['id']] = Factory::GetService($item['type'], $item);
            }
        }
        return $this->services;
    }

    /**
     * 获取本类的最终服务价格
     *
     * @return float
     */
    public function getPrice()
    {
        // TODO: Implement getPrice() method.
    }
}
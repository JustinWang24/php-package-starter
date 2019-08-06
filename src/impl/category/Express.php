<?php
/**
 * Created by https://yue.dev
 * Author: Justin Wang
 * Email: hi@yue.dev
 */

namespace Smartbro\PostOffice\impl\category;

use Smartbro\PostOffice\contracts\IDeliveryServiceCategory;
use Smartbro\PostOffice\contracts\IDeliveryService;

class Express extends BasicCategory
{
    private $services = null;

    public function __construct($resource)
    {
        parent::__construct($resource, IDeliveryServiceCategory::EXPRESS);
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

    public function getPrice()
    {
        // TODO: Implement getPrice() method.
    }
}
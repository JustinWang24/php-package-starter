<?php
/**
 * Created by https://yue.dev
 * Author: Justin Wang
 * Email: hi@yue.dev
 */

namespace Smartbro\PostOffice\impl\category;

use Smartbro\PostOffice\contracts\IDeliveryService;
use Smartbro\PostOffice\contracts\IDeliveryServiceCategory;

abstract class BasicCategory implements IDeliveryServiceCategory
{
    /**
     * @var IDeliveryService[]
     */
    protected $data = null;

    protected $maximumWeight;
    protected $code;
    protected $category;

    /**
     * @var IDeliveryService[]
     */
    protected $items = [];

    public function __construct($resource, $type)
    {
        $this->load($resource, $type);
        $this->category = $type;
    }

    public function load($resource, $type)
    {
        if(is_array($resource)){
            $data = $resource;
        }else{
            $data = json_decode(file_get_contents($resource), true);
        }

        if(isset($data['items'])){
            foreach ($data['items'] as $key=>$item) {
                if(isset($item['code']) && $item['code'] === $type && $item['category'] === IDeliveryServiceCategory::DOMESTIC_PARCEL){
                    $this->data          = $item;
                    $this->maximumWeight = $item['maximumWeight'] ?? null;
                    $this->code          = $item['code'] ?? null;
                }
            }
        }

        return $data;
    }

    /**
     * 获取最大的可邮寄重量, 以克为单位
     */
    public function getMaximumWeight()
    {
        return $this->maximumWeight;
    }

    /** 获取详情描述 */
    public function getDescription()
    {
        return $this->code;
    }

    /** 获取服务类别名称 */
    public function getName()
    {
        return $this->category;
    }
}
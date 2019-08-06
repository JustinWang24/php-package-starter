<?php
/**
 * Created by https://yue.dev
 * Author: Justin Wang
 * Email: hi@yue.dev
 */

namespace Smartbro\PostOffice\impl\service;


use Smartbro\PostOffice\contracts\IDeliveryService;
use Smartbro\PostOffice\contracts\IServiceItem;
use Smartbro\PostOffice\Factory;

abstract class AbstractService implements IDeliveryService
{
    protected $id;
    protected $type;
    /**
     * @var IServiceItem[]
     */
    protected $items = [];

    public function __construct($data)
    {
        $this->id = $data['id'];
        if(isset($data['items'])){
            foreach ($data['items'] as $item){
                $this->items[$item['id']] = Factory::GetServiceItem($this->type, $item);
            }
        }
    }

    public function getId(){
        return $this->id;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return IServiceItem[]
     */
    public function getItems()
    {
        return $this->items;
    }
}